<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\AnswerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(route('posts.index'));
});

Route::resource('/posts', PostController::class);

Route::resource('/posts/{post}/answers', AnswerController::class);