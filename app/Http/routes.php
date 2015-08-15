<?php

Route::get('/', function() {

    return view('welcome');

});

Route::get('home', 'ArticleController@index');

Route::controller('auth', 'Auth\AuthController');

Route::get('article', 'ArticleController@index');

Route::get('article/create', 'ArticleController@create');

Route::post('article', 'ArticleController@store');

Route::get('article/{article}/edit', 'ArticleController@edit');

Route::put('article/{article}', 'ArticleController@update');

Route::delete('article/{article}', 'ArticleController@destroy');