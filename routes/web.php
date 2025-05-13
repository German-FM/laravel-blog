<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;

Route::get('/', HomeController::class);

// Route::get('/posts', [PostController::class, 'index']) -> name('posts.index');

// Route::get('/posts/create', [PostController::class, 'create']) -> name('posts.create');

// Route::post('/posts', [PostController::class, 'store']) -> name('posts.store');

// Route::get('/posts/{post}', [PostController::class, 'show']) -> name('posts.show');

// Route::get('/posts/{post}/edit', [PostController::class, 'edit']) -> name('posts.edit');

// Route::post('/posts/{post}/update', [PostController::class, 'update']) -> name('posts.update');

// Route::delete('/posts/{post}', [PostController::class, 'destroy']) -> name('posts.destroy');

Route::resource('books', BookController::class);
    // ->parameters(['articulos' => 'post'])
    // ->names('posts');