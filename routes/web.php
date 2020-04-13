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

Route::get('/', 'PagesController@home');

// Rutas del Administrador
Route::group(['prefix' => 'admin', 'namespace'=> 'Admin', 'middleware' => 'auth'], function(){
    Route::get('posts','PostController@index');
});


Route::get('posts', function(){
    return App\Post::all();
});

;
Auth::routes(['register'=>false]);

Route::get('home', 'HomeController@index')->name('home');
