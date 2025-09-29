<!DOCTYPE html>
<html>
<head>
   <title>{{ config('app.name') }}</title>

</head>
<body>
    <h1>Tugas 2 Framework Pemrograman Web</h1>
    <p>Nama : Yusup Palkori </p>
    <p> Npm  : 2310631170058</p>
    <p>Kelas: 5D Informatika</p>
    <p>Silakan pilih salah satu tautan di bawah ini:</p>
    <ul>
       
        <li><a href="/user/2310631170058">Lihat Profil Pengguna ID</a></li>
        <li><a href="/user/Yusup">Lihat Profil Pengguna Nama</a></li>
        <li><a href="/user">Lihat Profil Pengguna (Parameter Opsional)</a></li>
       {{-- <li><a href="{{ route('profile.edit') }}">Pergi ke Halaman Profil (Named Route)</a></li> --}}
        <li><a href="/admin/dashboard">Pergi ke Admin Dashboard</a></li>
        <li><a href="/admin/profile">Pergi ke Admin Profile</a></li>
    </ul>

    
 
</body>
</html>