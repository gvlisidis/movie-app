<?php

use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers')->group(function (){
    Route::get('/', 'MoviesController@index')->name('movies.index');
    Route::get('/movies/{movie}', 'MoviesController@show')->name('movies.show');
});

