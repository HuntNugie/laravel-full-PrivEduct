<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        return view("page.guru.Daftar-order-guru");
    }

    public function show(Order $order){
        return view("page.guru.Detail-order-guru", compact('order'));
    }

    public function confirmBelajar(Order $order){
        // update status order menjadi selesai
        $order->update(["status_belajar"=>"completed"]);
        return redirect()->route("order.show",$order->id)->with("success","Pembelajaran telah dikonfirmasi");
    }
}
