<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class Articles extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('articles', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        return view('article', ['article' => $article]);
    }

    public function create(Article $article)
    {
        
    }
}
