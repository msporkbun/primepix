<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', 'MoviesController@index')->name('movies.index');
Route::view('/', 'index')->name('movies.index');
Route::view('/movie', 'show')->name('movies.show');
