<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuruAdminRequest;
use App\Http\Requests\GuruEditAdminRequest;
use App\Http\Requests\GuruRequest;
use App\Mail\notifGuruDaftar;
use App\Mail\notifGuruTerima;
use App\Mail\notifGuruTolak;
use App\Models\Guru;
use App\Models\MataPelajaran;
use App\Service\GuruService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class GuruController extends Controller
{
    public function __construct(private GuruService $service)
    {
    }

    public function index()
    {
        return view("page.admin.daftar-guru-admin");
    }
    public function indexUser()
    {
        return view('page.daftar-guru');

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

    public function edit(Guru $guru)
    {
        $selected_mapel = $guru->MataPelajarans->pluck("id")->toArray();
        $mapel = MataPelajaran::all();
        return view("page.admin.edit-guru", ["guru" => $guru, "mapel" => $mapel, "selected_mapel" => $selected_mapel]);
    }

    public function update(Guru $guru, GuruEditAdminRequest $request)
    {
        $this->service->updateGuru($request->validated(), $guru);
        return redirect()->route("guru");
    }

    public function show(Guru $guru)
    {
        return view("page.admin.detail-guru-admin", ["guru" => $guru]);
    }

    public function showUser(Guru $guru)
    {
        return view("page.user.Detail-guru-user", compact("guru"));
    }

    public function checkout(Guru $guru)
    {
        return view("page.user.Checkout-form", compact("guru"));
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
        $owner = config("mail.owner_email");
        Mail::to($owner)->send(new notifGuruDaftar($user));
        Auth::login($user);
        return redirect()->route("dashboard");
    }

    public function approveHandler(Guru $guru)
    {
        $guru->update([
            "status" => "approved"
        ]);
        $user = $guru->User;
        Mail::to($user->email)->send(new notifGuruTerima($user));
        return redirect()->route("guru");
    }

    public function rejectHandler(Guru $guru)
    {
        $guru->update([
            "status" => "rejected"
        ]);
        $user = $guru->User;
        Mail::to($user->email)->send(new notifGuruTolak($user));
        return redirect()->route("guru");
    }
}
