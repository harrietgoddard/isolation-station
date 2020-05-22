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

//journal entries feed
Route::get('articles', 'Articles@index');

//create new journal entry
Route::get('create', 'Articles@create');
Route::post('create', 'Articles@createArticle');

//view and comment on individual journal entry
Route::get('articles/{article}',[
    'as'   =>'articles.show',
    'uses' =>'Articles@show'
   ]);

Route::post('articles/{article}', 'Articles@createComment');



