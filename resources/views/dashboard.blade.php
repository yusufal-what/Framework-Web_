<div class="p-6">
    <div class="mb-4 p-4 bg-blue-500 text-white rounded">
        <h1 class="text-2xl font-bold">Dashboard Admin</h1>
        <p>Anda login sebagai <strong>{{ Auth::user()->role }}</strong>!</p>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="min-w-full">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2 text-left">Nama</th>
                    <th class="px-4 py-2 text-left">Email</th>
                    <th class="px-4 py-2 text-left">Role</th>
                </tr>
            </thead>
           
        </table>
    </div>
</div>

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Hasil Penjumlahan</h2>
    <p>Angka setelah ditambah adalah: <strong>{{ $hasil }}</strong></p>
    <h2>Hasil: {{ $hasil ?? 'Belum ada hasil' }}</h2>

</div>
@endsection