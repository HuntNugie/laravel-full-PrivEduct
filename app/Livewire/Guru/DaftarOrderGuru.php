<?php

namespace App\Livewire\Guru;

use App\Mail\notifSiswaDiterima;
use App\Models\Order;
use App\Service\OrderService;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class DaftarOrderGuru extends Component
{
    public $orders;

    public function acceptOrder(Order $orderId){
        $orderId->update([
            "status" => "accepted"
        ]);
        Mail::to($orderId->user->email)->send(new notifSiswaDiterima($orderId));
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
