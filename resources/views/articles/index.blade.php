@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Artikel</h1>

    <a href="{{ route('articles.create') }}" class="btn btn-primary">Tambah Artikel</a>

    @if(session('success'))
        <div class="alert alert-success mt-2">{{ session('success') }}</div>
    @endif

    <ul class="list-group mt-3">
        @foreach($articles as $article)
            <li class="list-group-item">
                <h4>{{ $article->title }}</h4>
                <p>{{ Str::limit($article->content, 100) }}</p>
                <small>Ditulis oleh: {{ $article->user->name }}</small>
                <br>
                <a href="{{ route('articles.show', $article) }}" class="btn btn-sm btn-info">Lihat</a>

                @if(auth()->id() === $article->user_id || auth()->user()->role === 'admin')
                    <a href="{{ route('articles.edit', $article) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('articles.destroy', $article) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                @endif
            </li>
        @endforeach
    </ul>
</div>
@endsection
