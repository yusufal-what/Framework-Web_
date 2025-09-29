<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // INDEX: Menampilkan daftar produk
    public function index()
    {
        // Sementara data dummy
        $products = [
            ['id' => 1, 'name' => 'Produk A', 'price' => 10000],
            ['id' => 2, 'name' => 'Produk B', 'price' => 20000],
        ];

        return view('product.index', compact('products'));
    }

    // CREATE: Form tambah produk
    public function create()
    {
        return view('product.create');
    }

    // STORE: Simpan produk baru
    public function store(Request $request)
    {
        // Validasi sederhana
        $request->validate([
            'name'  => 'required|string|max:100',
            'price' => 'required|numeric',
        ]);

        // Simulasi penyimpanan (aslinya: Product::create($request->all()))
        return redirect()->route('products.index')
            ->with('success', 'Produk berhasil ditambahkan!');
    }

    // SHOW: Tampilkan detail produk
    public function show($id)
    {
        return view('product.show', ['id' => $id]);
    }

    // EDIT: Form edit produk
    public function edit($id)
    {
        return view('product.edit', ['id' => $id]);
    }

    // UPDATE: Perbarui data produk
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'  => 'required|string|max:100',
            'price' => 'required|numeric',
        ]);

        // Simulasi update
        return redirect()->route('products.index')
            ->with('success', "Produk ID $id berhasil diperbarui!");
    }

    // DESTROY: Hapus produk
    public function destroy($id)
    {
        // Simulasi delete
        return redirect()->route('products.index')
            ->with('success', "Produk ID $id berhasil dihapus!");
    }

    // STATISTIK: Method khusus hitung angka
    public function statistik(int $inputAngka)
    {
        $angkaTambahan = 150;
        $angkaHasil = $inputAngka + $angkaTambahan;

        return view('product.statistik', [
            'inputAngka'    => $inputAngka,
            'angkaTambahan' => $angkaTambahan,
            'angkaHasil'    => $angkaHasil,
        ]);
    }
}
