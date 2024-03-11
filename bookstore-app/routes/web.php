<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', 'BookController@index')->name('books.index');


Route::get('/books/{book}', 'BookController@show')->name('books.show');


Route::get('/books/create', 'BookController@create')->name('books.create');
Route::post('/books', 'BookController@store')->name('books.store');


Route::get('/books/{book}/edit', 'BookController@edit')->name('books.edit');
Route::put('/books/{book}', 'BookController@update')->name('books.update');


Route::delete('/books/{book}', 'BookController@destroy')->name('books.destroy');