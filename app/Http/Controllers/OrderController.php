<?php

namespace App\Http\Controllers;

use App\Mail\notifKonfirmasiBelajar;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        Mail::to($order->user->email)->send(new notifKonfirmasiBelajar($order));
        return redirect()->route("order.show",$order->id)->with("success","Pembelajaran telah dikonfirmasi");
    }
}
