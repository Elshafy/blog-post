<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
Route::get('/profile','ProfileController@index')->name('profile');
Route::PUT('/profile/update','ProfileController@update')->name('profile.update');


// Routs for posts
Route::get('/posts','PostController@index')->name('posts');



Route::get('/posts/trashed','PostController@postsTrashed')->name('posts.trashed');
Route::get('/posts/create','PostController@create')->name('post.create');
Route::post('/posts/store','PostController@store')->name('post.store');
Route::get('/posts/shoe/{slug}','PostController@show')->name('post.show');
Route::get('/posts/edit/{id}','PostController@edit')->name('post.edit');
Route::post('/posts/update/{id}','PostController@update')->name('post.update');
Route::get('/posts/destroy/{id}','PostController@destroy')->name('post.destroy');
Route::get('/posts/hdelete/{id}','PostController@hdelete')->name('post.hdelete');
Route::get('/posts/restore/{id}','PostController@restore')->name('post.restore');


// Routs of tags
Route::get('/tags','TagController@index')->name('tags');
Route::get('/tag/create','TagController@create')->name('tag.create');
Route::post('/tag/store','TagController@store')->name('tag.store');
Route::get('/tag/shoe/{slug}','TagController@show')->name('tag.show');
Route::get('/tag/edit/{id}','TagController@edit')->name('tag.edit');
Route::post('/tag/update/{id}','TagController@update')->name('tag.update');
Route::get('/tag/destroy/{id}','TagController@destroy')->name('tag.destroy');
// user rout

Route::get('/users','UserController@index')->name('users');
Route::get('/users/create','UserController@create')->name('user.create');
Route::post('/users/store','UserController@store')->name('user.store');
Route::get('/users/destroy/{id}','UserController@destroy')->name('user.destroy');



