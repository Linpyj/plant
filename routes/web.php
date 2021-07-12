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

Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/register', function() {
    return view('auth.register');
});
Route::post('/register', 'Auth\RegisterController@create')->name('register');

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/line', 'PostController@index')->name('post.index');

Route::middleware(['cors'])->group(function () {
    Route::post('/line', 'PostController@store')->name('post.create');
});

Route::get('/post/create', 'PostController@create')->name('post.create');