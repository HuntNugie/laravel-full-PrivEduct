<?php

namespace App\Http\Controllers;

use App\Http\Requests\createPostinganRequest;
use App\Service\PostingService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostingController extends Controller
{
    public function __construct(private PostingService $service){}
    public function index(){
        $posting = Auth::user()->guru->posting;
        return $posting ? view("page.guru.Posting-guru-pub") : view("page.guru.Posting-guru");
    }
    
    public function create(){
        return view("page.guru.Form-posting-guru");
    }

    public function store(createPostinganRequest $req){
        $this->service->createPostingan($req->validated(),$req->file("foto_cover"));
        return redirect()->route("posting");
    }
}
