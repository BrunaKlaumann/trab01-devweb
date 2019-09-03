<?php

use Illuminate\Http\Request;

Use App\Article;
use App\UsuariosDaLivrariaController;
use App\AutorController;
use App\LivroController;
use App\AutorLivroController;
use App\LocacoesController;


Route::group(['middleware' => 'auth:api'], function() {
 
    Route::get('articles', 'ArticleController@index');
    Route::get('articles/{article}', 'ArticleController@show');
    Route::post('articles', 'ArticleController@store');
    Route::put('articles/{article}', 'ArticleController@update');
    Route::delete('articles/{article}', 'ArticleController@delete');

    Route::get('autor', 'AutorController@index');
    Route::get('autor/{article}', 'AutorController@show');
    Route::post('autor', 'AutorController@store');
    Route::put('autor/{article}', 'AutorController@update');
    Route::delete('autor/{article}', 'AutorController@delete');

    Route::get('livros', 'LivroController@index');
    Route::get('livros/{livros}', 'LivroController@show');
    Route::post('livros', 'LivroController@store');
    Route::put('livros/{livros}', 'LivroController@update');
    Route::delete('livros/{livros}', 'LivroController@delete');

    Route::get('autor-livro', 'AutorLivroController@index');
    Route::get('autor-livro/{autorlivro}', 'AutorLivroController@show');
    Route::post('autor-livro', 'AutorLivroController@store');
    Route::put('autor-livro/{autorlivro}', 'AutorLivroController@update');
    Route::delete('autor-livro/{autorlivro}', 'AutorLivroController@delete');

    Route::get('usuarios', 'UsuariosDaLivrariaController@index');
    Route::get('usuarios/{usuarios}', 'UsuariosDaLivrariaController@show');
    Route::post('usuarios', 'UsuariosDaLivrariaController@store');
    Route::put('usuarios/{usuarios}', 'UsuariosDaLivrariaController@update');
    Route::delete('usuarios/{usuarios}', 'UsuariosDaLivrariaController@delete');

    Route::get('locacoes', 'LocacoesController@index');
    Route::get('locacoes/{locacoes}', 'LocacoesController@show');
    Route::post('locacoes', 'LocacoesController@store');
    Route::put('locacoes/{locacoes}', 'LocacoesController@update');
    Route::delete('locacoes/{locacoes}', 'LocacoesController@delete');
});

Route::post("Register", 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');

 
