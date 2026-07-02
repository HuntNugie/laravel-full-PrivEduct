<?php namespace App\Service;

use App\Models\Order;
use App\Models\Transactions;

class CheckoutService{
    public function getData(){
        return auth()->user()->orders();
    }

    public function createTransaction(array $data,Order $order){
        return $order->transactions()->create([
            "amount" => $data["amount"],
            "midtrans_transaction_id" => $data["midtrans_transaction_id"],
        ]);
    }

    public function getTransactionById($id){
        return Transactions::where("id",$id)->first();
    }
}