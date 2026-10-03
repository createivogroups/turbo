<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return  view('welcome');
});

/* Route::get('/posts', [PostController::class, 'index'])
    ->name('posts.index');

Route::get('/posts/create', [PostController::class, 'create'])
    ->name('posts.create');

Route::get('/posts/{post}', [PostController::class, 'show'])
    ->name('posts.show');

Route::post('/posts' , [PostController::class , 'store'])
    ->name('posts.store');

Route::delete('/posts/{post}' , [PostController::class , 'destroy'])
    ->name('posts.destroy'); */

Route::resource('/posts' , PostController::class);


Route::get('/login' , [LoginController::class , 'login'] )
    ->name('login')
    ->middleware('guest');

Route::post('/login' , [LoginController::class , 'authenticate'])
    ->name('authenticate');
Route::get('/logout' , [LoginController::class , 'logout'])
    ->name('logout');