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

Route::get('/', function () {
    return redirect('/books');
});

Route::get('/books', 'BookController@index');

Route::get('/books/add', 'BookController@add')->name('book.add');

Route::post('/books', 'BookController@store')->name('book.store');