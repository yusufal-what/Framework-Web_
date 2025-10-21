<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\User;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('barang');
});

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/dashboard/{angka?}', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::resource('products', ProductController::class);
Route::get('/barang', function () {
    return view('barang');
});


Route::get('/produk/{angka}', [ProductController::class, 'show']);

Route::get('/langganan', function () {
    return view('langganan');
});

require __DIR__.'/auth.php';