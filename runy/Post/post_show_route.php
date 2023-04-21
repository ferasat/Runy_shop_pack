<?php

use App\Http\Livewire\Admin\Post\IndexPost;
use Illuminate\Support\Facades\Route;
use Post\Controllers\CategoryPostController;
use Post\Controllers\PostController;

Route::prefix('/post')->group( function (){
    Route::get('/{post:slug}', [PostController::class , 'show']);
});
Route::get('/blog', [PostController::class , 'blog'])->name('post.blog');
