<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class Home extends Controller
{
    public function index()
    {
        $articles = Article::all()->random(3);

        return view('welcome', ['articles' => $articles]);
    }
}
