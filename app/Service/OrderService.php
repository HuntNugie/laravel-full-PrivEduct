<?php
namespace App\Service;

use App\Models\Order;

class OrderService
{
    private $filter = "";
    public function createOrder(array $data, int $guruId, int $userId): Order
    {

        $order = Order::create([
            "guru_id" => $guruId,
            "user_id" => $userId,
            "tarif" => $data["tarif"],
            "catatan" => $data["catatan"],
            "jadwal_belajar" => $data["jadwal_belajar"],
            "metode_belajar" => $data["metode_belajar"],
        ]);

        return $order;

    }

 
    public function getOrder()
    {
        $guru = auth()->user()->guru;
        $orders = $guru->orders()->with("user")->latest()->get();
        return $orders;
    }

}