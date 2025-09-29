<!DOCTYPE html>
<html>
<head>
    <title>Edit Data UTS</title>
</head>
<body>
    <h1>Edit Data UTS</h1>

    <form action="/uts/update/{{ $uts->id }}" method="post">
        @csrf
        <p>
            <label>Nama Mata Kuliah</label><br>
            <input type="text" name="nama_matkul" value="{{ $uts->nama_matkul }}">
        </p>
        <p>
            <label>Jumlah SKS</label><br>
            <input type="number" name="jumlah_sks" value="{{ $uts->jumlah_sks }}">
        </p>
        <p>
            <label>Keterangan</label><br>
            <input type="text" name="keterangan" value="{{ $uts->keterangan }}">
        </p>
        <p>
            <button type="submit">Update</button>
        </p>
    </form>

    <td>
    <a href="/uts/edit/{{ $u->id }}">Edit</a>
    </td>


    <a href="/uts">Kembali ke Halaman UTS</a>
</body>
</html>
