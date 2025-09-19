@extends('layouts.app')

@section('content')
    <h1>Tambah Produk Baru</h1>

    {{-- tampilkan error validasi jika ada --}}
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div>
            <label for="name">Nama Produk:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        </div>

        <div>
            <label for="price">Harga Produk:</label>
            <input type="number" name="price" id="price" value="{{ old('price') }}" required>
        </div>

        <button type="submit">Simpan</button>
    </form>
@endsection
