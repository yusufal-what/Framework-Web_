<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/profile', function () {
    return view('profile.show');
})->middleware(['auth'])->name('profile');

// Route untuk lihat user by ID
Route::get('/user/{id}', function ($id) {
    return "Lihat profil pengguna dengan ID: " . $id;
});

// Route untuk lihat user by nama
Route::get('/user/{name}', function ($name) {
    return "Lihat profil pengguna dengan nama: " . $name;
});

// Route opsional (id bisa kosong)
Route::get('/user/{id?}', function ($id = null) {
    if ($id) {
        return "Lihat profil pengguna dengan ID opsional: " . $id;
    } else {
        return "Tidak ada ID yang dimasukkan.";
    }
});



require __DIR__.'/auth.php';
