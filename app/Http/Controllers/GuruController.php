<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuruRequest;
use App\Models\MataPelajaran;
use App\Service\GuruService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuruController extends Controller
{
    public function __construct(private GuruService $service)
    {
    }

    public function index(){
        return view("page.isLogin.daftar-guru-admin");
    }

    public function create(){
        $mapel = MataPelajaran::all();

        return view("auth.register-guru",["mapel"=>$mapel]);
    }

    public function store(GuruRequest $request){
        $user = $this->service->register($request->validated(),$request->file("cv"));
        Auth::login($user);
        return redirect()->route("dashboard");
    }
}
