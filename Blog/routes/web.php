<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::resource('/user/posts', 'PostsController');

//Route::resource('/post', 'HomeController');
Route::get('/user/posts/{post}', 'PostsController@show')->name('posts');

//Route::get('/', 'HomeController@index');
Route::get('/posts', 'HomeController@list')->name('list');
Route::get('/', 'HomeController@index')->name('index');
Route::get('/posts/{post}', 'HomeController@show')->name('show');