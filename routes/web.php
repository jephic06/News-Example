<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\NewsController@index')->name('index');

Route::post('/load', 'App\Http\Controllers\NewsController@load')->name('load');
