<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class Articles extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();

        return view('articles', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        return view('article', ['article' => $article]);
    }

    public function create(Article $article)
    {
        return view('articles/form', ['article' => $article]);
    }

    public function createArticle(Request $request) //set up an Article Request
    {
        $data = $request->all();

        $article = Article::create($data);

        return redirect("articles/{$article->id}");
    }

    public function showGratitude()
    {
        $articles = Article::all();
        
        return view('gratitude', ['articles' => $articles]);
    }

    public function showAchievements()
    {
        $articles = Article::all();
        
        return view('achievements', ['articles' => $articles]);
    }

    public function showResolutions()
    {
        $articles = Article::all();
        
        return view('resolutions', ['articles' => $articles]);
    }
}
