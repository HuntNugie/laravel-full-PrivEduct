<?php

namespace App\Livewire\Guru;

use App\Mail\notifSiswaDiterima;
use App\Mail\notifSiswaDitolak;
use App\Models\Order;
use App\Service\OrderService;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithPagination;

class DaftarOrderGuru extends Component
{
    use WithPagination;
    public String $filter = "all";
    public String $search = "";
    public function updatingSearch(){
        $this->resetPage();
    }

    public function acceptOrder(Order $orderId)
    {
        $orderId->update([
            "status" => "accepted"
        ]);
        Mail::to($orderId->user->email)->send(new notifSiswaDiterima($orderId));
    }

       // untuk filter pending 
    public function filterMenungguStatus()
    {
        $this->filter = "pending";
    }

    // untuk filter accepted
    public function filterDiterimaStatus(){
        $this->filter = "accepted";
    }

    // untuk filter rejected
    public function filterDitolakStatus(){
        $this->filter = "rejected";
    }

    // untuk filter semua status
    public function filterSemuaStatus(){
        $this->filter = "all";
    }

    // untuk filter status order di bayar
    public function filterDibayarStatusBayar(){
        $this->filter = "paid";
    }

    public function filterBelajarStatusBelajar(){
        $this->filter = "belajar";
    }

    public function rejectOrder(Order $orderId)
    {
        $orderId->update([
            "status" => "rejected"
        ]);
        Mail::to($orderId->user->email)->send(new notifSiswaDitolak($orderId));

    }
    public function render()
    {
        $orders = auth()->user()->guru->orders()->latest();
        if($this->filter === "pending") {
            $orders = $orders->where("status", "pending");
        } else if ($this->filter === "accepted") {
            $orders = $orders->where("status", "accepted");
        } else if ($this->filter === "rejected") {
            $orders = $orders->where("status", "rejected");
        } else if ($this->filter === "paid") {
            $orders = $orders->where("status_bayar", "paid");
        }else if($this->filter === "belajar"){
            $orders = $orders->where("status_belajar", "booking");
        }
      
        if($this->search != "") {
            $orders = $orders->whereHas("user", function($query){
                $query->where("name", "like", "%".$this->search."%");
            });
        }
       
        return view('livewire.guru.daftar-order-guru', ["orders" => $orders->paginate(5)]);
    }
}
