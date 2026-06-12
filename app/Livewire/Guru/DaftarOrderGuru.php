<?php

namespace App\Livewire\Guru;

use App\Models\Order;
use App\Service\OrderService;
use Livewire\Component;

class DaftarOrderGuru extends Component
{
    public $orders;

    public function acceptOrder(Order $orderId){
        $orderId->update([
            "status" => "accepted"
        ]);
    }

    public function rejectOrder(Order $orderId){
        $orderId->update([
            "status" => "rejected"
        ]);
    }
    public function render(OrderService $service)
    {
        $this->orders = $service->getOrder();
        return view('livewire.guru.daftar-order-guru');
    }
}
