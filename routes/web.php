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


// untuk register guru
Route::get("/register/guru", [GuruController::class, "registerForm"])->name("guru.register");
// jang aksi nambihkeun guru
Route::post("/register/guru", [GuruController::class, "registerStore"])->name("guru.registerStore");


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

    // hal hal yang bisa di lakukan admin
    Route::middleware("admin")->group(function () {
        Route::prefix("guru")->group(function () {
            // jang nampilkeun daftar guru admin
            Route::get("/", [GuruController::class, "index"])->name("guru");
            // jang nampilkeun form register
            Route::get("/add", [GuruController::class, "create"])->name("guru.create");
            // jang aksi nambihkeun guru
            Route::post("/", [GuruController::class, "store"])->name("guru.store");
        });
    });


});
