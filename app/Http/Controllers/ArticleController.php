<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('article.index', ['articles' => $articles]);
    }

    public function detail($id)
    {
        $article = Article::find($id);
        return view('article.detail', ['article' => $article]);
    }
}
