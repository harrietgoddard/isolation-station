<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Home@index');

Route::get('articles', 'Articles@index');

Route::get('create', 'Articles@create');

Route::post('create', 'Articles@createArticle');

Route::get('articles/{article}', 'Articles@show'); //can remove this - replaced by below

Route::post('articles/{article}', 'Articles@createComment');

Route::get('gratitude', 'Articles@showGratitude');

Route::get('achievements', 'Articles@showAchievements');

Route::get('resolutions', 'Articles@showResolutions');

Route::get('articles/{article}',[
    'as'   =>'articles.show',
    'uses' =>'Articles@show'
   ]);

