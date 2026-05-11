<?php

use Illuminate\Support\Facades\Route;

// untuk halaman utama
Route::get('/', function () {
    return view('page.home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
