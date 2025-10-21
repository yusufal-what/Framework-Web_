@extends('utama')

@section('judul', 'Halaman Produk')

@section('konten')
    <h1>Halaman Produk</h1>
    <p>Nilai yang dimasukkan: {{ $angka }}</p>

    <!-- Panggil komponen alert untuk no 5 -->
    <x-alert type="{{ $alertType }}">{{ $pesan }}</x-alert>
@endsection