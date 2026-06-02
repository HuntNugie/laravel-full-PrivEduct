<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostingController extends Controller
{
    public function index(){
        return view("page.guru.Posting-guru-pub");
    }
    
    public function create(){
        return view("page.guru.Form-posting-guru");
    }
}
