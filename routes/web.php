<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view ('Selamat Datang');
});

Route::get('/', function(){
    return 'Hello Yusuf';
});

Route::get('/user/{id}', function($id){
    return "User ID: " . $id;
});

Route::get('/user/{nama?}', function($nama = 'Guest') {
    return "Hallo, " . $nama;
});

Route::get('/profile', function () {
    return 'This is the profile page.';
})->name('profile');

Route::get('/redirect-to-profile', function () {
    return redirect()->route('profile');
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });
    Route::get('/profile', function () {
        return 'Admin Profile';
    });
});

?>