<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuruRequest;
use App\Service\GuruService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuruController extends Controller
{
    public function __construct(private GuruService $service)
    {
    }

    public function create(){
        return view("auth.register-guru");
    }

    public function store(GuruRequest $request){
        $user = $this->service->register($request->validated(),$request->file("cv"));
        Auth::login($user);
        return redirect()->route("dashboard");
    }
}
