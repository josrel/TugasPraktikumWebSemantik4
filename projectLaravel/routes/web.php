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


Route::get('/','PagesController@home')->middleware('cekuser');

// Route::get('/book','BookController@index')->middleware('cekuser');

// Route::get('/book/create','BookController@create');

// Route::post('/book','BookController@store');

// Route::get('/book/{book}','BookController@show');

// Route::delete('/book/{book}','BookController@destroy');

// Route::get('/book/{book}/edit','BookController@edit');

// Route::patch('/book/{book}', 'BookController@update');

Route::get('/login', 'LoginController@index');

Route::post('/process', 'LoginController@verify');

Route::get('/logout', 'LoginController@logout');

Route::resource ('category','CategoryController')->middleware('cekuser');

Route::resource ('book','BookController')->middleware('cekuser');