<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data UTS</title>
</head>
<body>
    <h1>Form Tambah Data UTS</h1>

    <form action="/uts/store" method="post">
        @csrf
        <p>
            <label>Nama Mata Kuliah</label><br>
            <input type="text" name="nama_matkul">
        </p>
        <p>
            <label>Jumlah SKS</label><br>
            <input type="number" name="jumlah_sks">
        </p>
        <p>
            <label>Keterangan</label><br>
            <input type="text" name="keterangan">
        </p>
        <p>
            <button type="submit">Simpan</button>
        </p>
    </form>

    <a href="/uts">Kembali ke Halaman UTS</a>
</body>
</html>
