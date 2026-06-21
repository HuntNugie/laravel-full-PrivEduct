<?php namespace App\Service;

use App\Models\Order;
use App\Models\Transactions;

class CheckoutService{
    public function getData(){
        return auth()->user()->orders()->get();
    }

    public function createTransaction(array $data,Order $order){
        return $order->transactions()->create([
            "amount" => $data["amount"],
        ]);
    }

    public function getTransactionById($id){
        return Transactions::where("id",$id)->first();
    }
}