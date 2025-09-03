<!DOCTYPE html>
<html>
<head>
    <title>Halaman Utama</title>
</head>
<body>
    <h1>Selamat Datang di Aplikasi Saya</h1>
    <p>Silakan pilih salah satu tautan di bawah ini:</p>
    <ul>
        <li><a href="/hello">Lihat Hello World</a></li>
        <li><a href="/user/1234">Lihat Profil Pengguna ID</a></li>
        <li><a href="/user/John">Lihat Profil Pengguna Nama</a></li>
        <li><a href="/user">Lihat Profil Pengguna (Parameter Opsional)</a></li>
        <li><a href="{{ route('profile') }}">Pergi ke Halaman Profil (Named Route)</a></li>
        <li><a href="/redirect-to-profile">Redirect ke Halaman Profil</a></li>
        <li><a href="/admin/dashboard">Pergi ke Admin Dashboard</a></li>
        <li><a href="/admin/profile">Pergi ke Admin Profile</a></li>
    </ul>
</body>
</html>