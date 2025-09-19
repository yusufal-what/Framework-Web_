<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Route Resource untuk Produk (CRUD otomatis)
Route::resource('products', ProductController::class);

// Halaman Welcome
Route::get('/', function () {
    return view('welcome');
});

// Dashboard dengan middleware
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Group route untuk Profile (auth wajib)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route user by ID
Route::get('/user/id/{id}', function ($id) {
    return "Lihat profil pengguna dengan ID: " . $id;
});

// Route user by nama
Route::get('/user/name/{name}', function ($name) {
    return "Lihat profil pengguna dengan nama: " . $name;
});

// Route opsional (id bisa kosong) – kalau mau dipakai, hapus yang atas biar nggak tabrakan
Route::get('/user/{id?}', function ($id = null) {
    if ($id) {
        return "Lihat profil pengguna dengan ID opsional: " . $id;
    } else {
        return "Tidak ada ID yang dimasukkan.";
    }
});

// Route auth bawaan Breeze
require __DIR__.'/auth.php';
