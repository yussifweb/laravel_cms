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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Front End Routes
Route::get('/news', 'FrontController@news')->name('news');
Route::get('/uncategorized', 'FrontController@uncategorized')->name('uncategorized');
Route::get('/instrumentals', 'FrontController@instrumentals')->name('instrumentals');
Route::get('/mixes', 'FrontController@mixes')->name('mixes');
Route::get('/albums', 'FrontController@albums')->name('albums');
Route::get('/videos', 'FrontController@videos')->name('videos');
Route::get('/about', 'FrontController@about')->name('about');

//Back End Routes
Route::get('categories/create', 'FrontController@create')->name('create');
Route::get('categories/index', 'FrontController@index')->name('index');
Route::get('users/register', 'FrontController@register')->name('register');
Route::get('users/login', 'FrontController@login')->name('login');
Route::get('posts/create', 'FrontController@createPost')->name('createPost');
Route::get('posts/edit', 'FrontController@postEdit')->name('postEdit');