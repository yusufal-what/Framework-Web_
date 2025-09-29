<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Khusus Admin dan Owner</title>
</head>
<body>

    <h1>Data Dashboard Produk</h1>
    <p>Selamat datang, **{{ Auth::user()->name }}** (Role: **{{ Auth::user()->role->name }}**)</p>
    
    <hr>
    
    <h2>Hasil Perhitungan Controller</h2>
    <p>Angka yang diterima dari URL: **{{ $input }}**</p>
    <p>Angka yang ditambahkan (misalnya +100): **100**</p>
    <p>Angka Final (Angka yang dilempar ke View): **{{ $angka }}**</p>

</body>
</html>