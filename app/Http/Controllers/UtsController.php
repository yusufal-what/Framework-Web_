<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UtsController extends Controller
{
    public function index()
    {
        // Hubungkan ke view ke index.blade
        return view('uts.index');
    }

    public function create()
{
    // Menampilkan form tambah data
    return view('uts.create');
}

public function store(Request $request)
{
    // Validasi sederhana
    $request->validate([
        'nama_matkul' => 'required',
        'jumlah_sks' => 'required|integer',
        'keterangan' => 'required'
    ]);

    // Simpan data ke database
    DB::table('uts')->insert([
        'nama_matkul' => $request->nama_matkul,
        'jumlah_sks' => $request->jumlah_sks,
        'keterangan' => $request->keterangan
    ]);

    // Redirect kembali ke index
    return redirect('/uts');
}

}
