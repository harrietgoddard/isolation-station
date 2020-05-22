<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class Home extends Controller
{
    public function index()
    {
        //random selection of journal entries for each of the three cards on homepage
        $articlesFirst = Article::whereNotNull('gratitude')->get()->random(3);
        $articlesSecond = Article::whereNotNull('achievement')->get()->random(3);
        $articlesThird = Article::whereNotNull('resolution')->get()->random(3);

        return view('welcome', [
            'articlesFirst' => $articlesFirst,
            'articlesSecond' => $articlesSecond,
            'articlesThird' => $articlesThird
            ]);
    }
}
