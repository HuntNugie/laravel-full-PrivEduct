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
}
