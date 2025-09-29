<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\GoogleController;
use Illuminate\Support\Facades\Route;

// halaman welcome
Route::get('/', function () {
    return view('welcome');
});

// Dashboard middleware (akses setelah login & verifikasi)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// produuk
Route::resource('products', ProductController::class);

// Rute tambahan khusus untuk statistik (admin & owner)
Route::middleware(['auth', 'role:admin,owner'])->group(function () {
    Route::get('/dashboard/statistik/{angka}', [ProductController::class, 'statistik'])
        ->name('product.statistik');
});

//artikel
Route::middleware(['auth'])->group(function () {
    Route::resource('articles', ArticleController::class);
    // Catatan: - User bisa CRUD artikel miliknya sendiri.,- Admin bisa CRUD semua artikel.
   
   // google login
Route::get('/auth/google', [GoogleController::class, 'google_redirect'])
    ->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'google_callback'])
    ->name('google.callback');

// profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// contoh route parameter una dengan ID: " . $id;
});

Route::get('/user/name/{name}', function ($name) {
    return "Lihat profil pengguna dengan nama: " . $name;
});

// Route opsional
Route::get('/user/{id?}', function ($id = null) {
    return $id
        ? "Lihat profil pengguna dengan ID opsional: " . $id
        : "Tidak ada ID yang dimasukkan.";
});

// lainnya
Route::get('/route_cont/{id}', [ProductController::class, 'show']);
Route::get('/langganan', function () {
    return view('langganan');
});
// route uts fwb
Route::get('/uts', function () {
    return view('uts.index'); 
});

// Auth bawaan Breeze
require __DIR__ . '/auth.php';
