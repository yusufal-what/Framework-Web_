@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->content }}</p>
    <small>Ditulis oleh: {{ $article->user->name }} pada {{ $article->created_at->format('d M Y') }}</small>
    <br><br>
    <a href="{{ route('articles.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
