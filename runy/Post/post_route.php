<?php

use App\Http\Livewire\Admin\Post\IndexPost;
use Illuminate\Support\Facades\Route;
use Post\Controllers\CategoryPostController;
use Post\Controllers\PostController;

Route::prefix('/dashboard')->middleware('auth')->group( function (){
    Route::get('/post/', [PostController::class , 'index'])->name('post.index');
    Route::get('/post/create', [PostController::class , 'create'])->name('post.Create');
    Route::get('/post/edit/{id}', [PostController::class , 'edit'])->name('post.edit');
    Route::get('/portfolio/edit/{id}', [PostController::class , 'edit']);
    Route::post('/post/edit', [PostController::class , 'update'])->name('post.update');
    Route::get('/post/delete/{id}', [PostController::class , 'delete'])->name('post.delete');
    Route::get('/portfolio/delete/{id}', [PostController::class , 'delete']);
    Route::get('/post/clone/{id}', [PostController::class , 'clone'])->name('post.clone');
    Route::get('/portfolio/clone/{id}', [PostController::class , 'clone']);

    Route::post('/post/editor_image_upload', [PostController::class , 'picInPost'])->name('post.image.upload');

    Route::get('/post/category' , [CategoryPostController::class , 'index'])->name('category.post');
});

