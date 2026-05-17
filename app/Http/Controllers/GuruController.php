<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuruAdminRequest;
use App\Http\Requests\GuruEditAdminRequest;
use App\Http\Requests\GuruRequest;
use App\Models\Guru;
use App\Models\MataPelajaran;
use App\Service\GuruService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuruController extends Controller
{
    public function __construct(private GuruService $service)
    {
    }

    public function index()
    {
        return view("page.admin.daftar-guru-admin");
    }

    public function create()
    {
        $mapel = MataPelajaran::all();
        return view("page.admin.add-guru", ["mapel" => $mapel]);
    }

    public function store(GuruAdminRequest $request)
    {
        $this->service->addGuru($request->validated());
        return redirect()->route("guru");
    }

    public function edit(Guru $guru){
        $selected_mapel = $guru->MataPelajarans->pluck("id")->toArray();
        $mapel = MataPelajaran::all();
        return view("page.admin.edit-guru",["guru" => $guru,"mapel" => $mapel, "selected_mapel" => $selected_mapel]);
    }

    public function update(Guru $guru, GuruEditAdminRequest $request){
        $this->service->updateGuru($request->validated(),$guru);
        return redirect()->route("guru");
    }


    // ini untuk di halaman register guru yang bisa di akses semua orang
    public function registerForm()
    {
        $mapel = MataPelajaran::all();

        return view("auth.register-guru", ["mapel" => $mapel]);
    }

    public function registerStore(GuruRequest $request)
    {
        $user = $this->service->register($request->validated(), $request->file("cv"));
        Auth::login($user);
        return redirect()->route("dashboard");
    }
}
