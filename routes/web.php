<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });

Route::resource('/', PostController::class);

// Route::get('/', 'App\Http\Controllers\PostController@index');
