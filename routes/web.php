<?php

use Illuminate\Support\Facades\Route;

// Routes for the application
Route::middleware('auth')->group(function () {

    Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

    Route::prefix('folio')->group(function () {
        Route::get('/create', 'App\Http\Controllers\FolioController@create')->name('folio.create');
        Route::post('/store', 'App\Http\Controllers\FolioController@store')->name('folio.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\FolioController@edit')->name('folio.edit');
        Route::put('/update/{id}', 'App\Http\Controllers\FolioController@update')->name('folio.update');
        Route::delete('/delete/{id}', 'App\Http\Controllers\FolioController@destroy')->name('folio.delete');
    });
});

// Authentication routes
Route::get('/login', 'App\Http\Controllers\AuthController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\AuthController@login')->name('login.submit');

Route::post('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::get('/register', 'App\Http\Controllers\AuthController@showRegistrationForm')->name('register');
Route::post('/register', 'App\Http\Controllers\AuthController@register')->name('register.submit');
