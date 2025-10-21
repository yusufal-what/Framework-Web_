<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        
        $angka = 10; // contoh angka bebas
        $hasil = $angka + 5; 

        return view('dashboard', compact('hasil'));
    }
}