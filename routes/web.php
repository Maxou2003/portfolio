<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

Route::prefix('folio')->group(function () {
    Route::get('/create', 'App\Http\Controllers\FolioController@create')->name('folio.create');
    Route::post('/store', 'App\Http\Controllers\FolioController@store')->name('folio.store');
    Route::get('/edit/{id}', 'App\Http\Controllers\FolioController@edit')->name('folio.edit');
    Route::put('/update/{id}', 'App\Http\Controllers\FolioController@update')->name('folio.update');
    Route::delete('/delete/{id}', 'App\Http\Controllers\FolioController@destroy')->name('folio.delete');
});
