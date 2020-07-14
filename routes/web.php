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


Auth::routes(['verify' => true]);

//CONTROLLER PUBBLICO
Route::get('/', 'HomeController@index')->name('home');

//POST PUBBLICO
Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/{slug}', 'PostController@show')->name('posts.show');



//CONTROLLER PER ADMIN (poter   cambiare e gestire argomenti e parti di sito)
Route::prefix('admin')->namespace('Admin')->name('admin.')->middleware('auth')->group(function () {
      Route::get('/', 'HomeController@index')->name('home');
      Route::resource('/posts' , 'PostController');
});
