<?php

use Illuminate\Support\Facades\Route;
use Post\Controllers\CategoryPostController;
use Post\Controllers\PostController;

Route::prefix('/post')->group( function (){
    Route::get('/{post:slug}', [PostController::class , 'show']);
});
Route::get('/blog', [PostController::class , 'blog'])->name('post.blog');

Route::get('/post-category/{categorypost:slug}', [CategoryPostController::class , 'show']);

Route::get('/p/{id}', [PostController::class , 'showById']);
