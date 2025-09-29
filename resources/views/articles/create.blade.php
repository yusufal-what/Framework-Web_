@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Buat Artikel Baru</h1>

    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" name="title" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Konten</label>
            <textarea class="form-control" name="content" rows="5" required></textarea>
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
