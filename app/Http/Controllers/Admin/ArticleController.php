<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('author')->orderBy('id', 'DESC')->get();
        return view('pages.admin.article.index', compact('articles'));
    }

    public function create()
    {
        return view('pages.admin.article.create');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->slug);
        $data['author'] = Auth::user()->id;
        unset($data['_token']);
        Article::insert($data);

        return redirect(route('article.index'))->with('status', 'Artikel berhasil dibuat');
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $article = Article::findOrFail($id);
        return view('pages.admin.article.edit', compact('article'));
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->slug);
        $data['author'] = Auth::user()->id;

        $article = Article::findOrFail($request->id);
        $article->update($data);
        return redirect(route('article.index'))->with('status', 'Artikel berhasil diubah');
    }

    public function delete(Request $request)
    {
        Article::destroy($request->id);
        return redirect(route('article.index'))->with('status', 'Artikel berhasil dihapus');
    }
}
