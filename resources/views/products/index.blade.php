<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>
    <a href="{{ route('products.create') }}">Tambah Produk</a>
    <ul>
        @foreach ($products as $product)
            <li>
                {{ $product['name'] }} - Rp{{ number_format($product['price']) }}
                <a href="{{ route('products.show', $loop->index) }}">Lihat</a>
                <a href="{{ route('products.edit', $loop->index) }}">Edit</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
