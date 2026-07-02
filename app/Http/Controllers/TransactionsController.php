<?php

namespace App\Http\Controllers;

use App\Service\CheckoutService;
use App\Service\OrderService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TransactionsController extends Controller
{

    public function __construct(private CheckoutService $service)
    {
    }
    public function notification(Request $request)
    {
        $payload = $request->all();
        
        Log::info('MIDTRANS NOTIF:');
        Log::info($payload);
        $serverKey = config('midtrans.server_key');
        $orderId = $payload['order_id'];
        $statusCode = $payload['status_code'];
        $grossAmount = $payload['gross_amount']; 

        $signature = hash(
            'sha512',
            $orderId .
            $statusCode .
            $grossAmount .
            $serverKey
        );

        Log::info([
            'generated_signature' => $signature,
            'midtrans_signature' => $payload['signature_key'],
        ]);
        if ($signature !== $payload['signature_key']) {
            Log::info("masuk kesini");
            return response()->json(['message' => 'Invalid signature'], 403);
        }
        $idOrder = explode("@", $payload['order_id'])[1];
        $order = $this->service->getTransactionById($idOrder);
        Log::info($order);
        if (!$order || !$order->order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        if ($order->order->status_bayar === 'paid') {
            return response()->json(['message' => 'Already processed'], 200);
        }

        switch ($payload['transaction_status']) {
            case 'settlement':
                $order->order->status_bayar = 'paid';
                $order->status = "paid";
                $order->order->status_belajar = "booking";
                $order->midtrans_transaction_id = $payload["transaction_id"];
                $order->payment_method = $payload["payment_type"];
                $order->paid_at = $payload["transaction_time"];
                break;

            case 'pending':
                $order->order->status_bayar = 'pending';
                $order->status = "pending";
                break;

            case 'expire':
                $order->order->status_bayar = 'expired';
                $order->status = "expired";
                $order->expired_at = $payload["expiry_time"];
                break;

            case 'cancel':
            case 'deny':
                $order->order->status_bayar = 'failed';
                $order->status = "failed";
                break;
        }

        $order->order->save();
        $order->save();

        return response()->json(['status' => 'ok'], 200);
    }
}
