<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome', ['posts'=>Post::all()]);
})->name('home');

Route::get('/create', [PostController::class, 'create'])->name('posts.create');


Route::post('/store', [PostController::class, 'store'])->name('store');

Route::resource('posts', PostController::class);
