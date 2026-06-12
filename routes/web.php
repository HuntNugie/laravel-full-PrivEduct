<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostingController;
use Illuminate\Support\Facades\Route;

// jang nampilkeun halaman utama
Route::get('/', function () {
    return view('page.home');
})->name('home');

Route::prefix("guru")->group(function () {
    Route::get("/", [GuruController::class, "indexUser"])->name("guru.user.index");
    Route::middleware("isAuthUser")->group(function () {
        Route::get("/{guru}", [GuruController::class, "showUser"])->name("guru.user.show");
        Route::get("/{guru}/checkout", [GuruController::class, "checkout"])->name("guru.checkout");
    });
});
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
        Route::prefix("admin")->group(function () {
            Route::get("/guru", [GuruController::class, "index"])->name("guru");
            Route::get("/guru/create", [GuruController::class, "create"])->name("guru.create");
            Route::post("/guru", [GuruController::class, "store"])->name("guru.store");
            Route::get("/guru/{guru}/edit", [GuruController::class, "edit"])->name("guru.edit");
            Route::put("/guru/{guru}", [GuruController::class, "update"])->name("guru.update");
            Route::get("/guru/{guru}", [GuruController::class, "show"])->name("guru.show");
        });
    });

    // ini hal hal yang hanya bisa di lakukan guru yang sudah di approved
    Route::middleware("approveGuru")->group(function () {
        Route::prefix("auth/guru")->group(function () {
            // tambahkan route yang hanya bisa di akses guru yang sudah di approve disini
            Route::prefix("posting")->group(function () {
                Route::get("/", [PostingController::class, "index"])->name("posting");
                Route::get("/create", [PostingController::class, "create"])->name("posting.create");
                Route::post("/", [PostingController::class, "store"])->name("posting.store");
            });

            // route untuk daftar order yang bisa di akses guru yang sudah di approve
            Route::prefix("order")->group(function () {
                Route::get("/", [OrderController::class, "index"])->name("order.index");
                Route::get("/{order}", [OrderController::class, "show"])->name("order.show");
            });
        });
    });

    // ini untuk user 
});
