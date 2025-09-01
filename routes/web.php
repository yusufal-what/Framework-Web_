<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return 'about';
})->name('about');

Route:: get('/users/{id}', function($id) {
    return "Nilai id usser adalah ".$id;
});

Route::get('/contact', function () {
    return "Ini adalah halaman kontak";
})->name('contact');

Route:: get('/users/{id}/edit', function($id){
    return "Edit user dengan ID = " .$id;
})->name('contact');