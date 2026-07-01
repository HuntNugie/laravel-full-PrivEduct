<?php

namespace App\Http\Controllers;

use App\Mail\notifGuruBooking;
use App\Models\Order;
use App\Service\CheckoutService;
use App\Service\MidtransService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{

    public function __construct(private MidtransService $midtrans, private CheckoutService $service)
    {

    }
    public function index()
    {
        return view("page.user.Daftar-checkout");
    }

    public function paymentShow(Order $order)
    {
        $data = [
            "amount" => $order["tarif"]
        ];
        $result = $this->service->createTransaction($data, $order);


        $params = [
            'transaction_details' => [
                'order_id' => $result->id,
                'gross_amount' => intval($order->tarif),
            ],
            'customer_details' => [
                'first_name' => $order->user->name,
                'email' => $order->user->email,
            ],
            'item_details' => [
                [
                    'id' => 'GR-' . $order->id,
                    'price' => intval($order->tarif),
                    'quantity' => 1,
                    'name' => 'Home Schooling - ' . $order->guru->user->name
                ]
            ]
        ];

        // buat snap token nya terlebih dahulu
        $token = $this->midtrans->createSnapToken($params);

        $result->update(["snap_token" => $token,"amount"=>$order->tarif]); 
        return view("page.user.Payment", ["snap_token" => $token, "order" => $order]);
    }
}
