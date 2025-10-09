<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function tampil($nilai)
    {
        // Cek ganjil atau genap
        if ($nilai % 2 == 0) {
            $pesan = "Nilai ini adalah genap";
            $alertType = "success";
        } else {
            $pesan = "Nilai ini adalah ganjil";
            $alertType = "warning";
        }

        // Kirim ke view
        return view('produk', compact('pesan', 'alertType'));
    }
}
