<?php

use App\Http\Controllers\GuruController;
use Illuminate\Support\Facades\Route;

// jang nampilkeun halaman utama
Route::get('/', function () {
    return view('page.home');
})->name('home');


// jang nampilkeun halaman daftar guru jeung user
Route::get("daftar-guru", function () {
    return view('page.daftar-guru');
})->name('daftar-guru');

// jang routing guru
Route::prefix("guru")->group(function(){
    // jang nampilkeun form register
    Route::get("/register",[GuruController::class,"create"])->name("guru.create");
    // jang aksi nambihkeun guru
    Route::post("/",[GuruController::class,"store"])->name("guru.store");
});

// halaman untuk bisa di lakukan jika login
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    // halaman dashboard setelah login
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    // 
});
