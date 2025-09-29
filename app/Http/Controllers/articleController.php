<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    // Daftar artikel
    public function index()
    {
        $articles = Article::with('user')->latest()->get();
        return view('articles.index', compact('articles'));
    }

    // Form tambah artikel
    public function create()
    {
        return view('articles.create');
    }

    // Simpan artikel baru
    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Article::create([
            'title'   => $request->title,
            'content' => $request->content,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil dibuat.');
    }

    // Detail artikel
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    // Form edit artikel
    public function edit(Article $article)
    {
        // Hanya pemilik artikel atau admin
        if (Auth::id() !== $article->user_id && Auth::user()->role !== 'admin') {
            abort(403, 'Tidak punya akses');
        }

        return view('articles.edit', compact('article'));
    }

    // Update artikel
    public function update(Request $request, Article $article)
    {
        if (Auth::id() !== $article->user_id && Auth::user()->role !== 'admin') {
            abort(403, 'Tidak punya akses');
        }

        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $article->update([
            'title'   => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    // Hapus artikel
    public function destroy(Article $article)
    {
        if (Auth::id() !== $article->user_id && Auth::user()->role !== 'admin') {
            abort(403, 'Tidak punya akses');
        }

        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil dihapus.');
    }
}
