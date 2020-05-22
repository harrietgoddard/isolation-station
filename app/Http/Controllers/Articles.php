<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Comment;

class Articles extends Controller
{
    //journal entries feed
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();

        return view('articles', ['articles' => $articles]);
    }

    //individual journal entry
    public function show(Article $article)
    {
        return view('article', ['article' => $article]);
    }

    //new journal entry form
    public function create(Article $article)
    {
        return view('articles/form', ['article' => $article]);
    }

    //create new journal entry
    public function createArticle(Request $request) //need to set up an Article Request
    {
        $data = $request->all();

        $article = Article::create($data);

        return redirect("articles/{$article->id}");
    }

    //create new comment
    public function createComment(Request $request, Article $article) //need to set up a Comment request
    {
        $comment = new Comment($request->all());
        
        $article->comments()->save($comment);

        return redirect("articles/{$article->id}");
    }

}
