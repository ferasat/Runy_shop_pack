<?php

use App\Http\Livewire\Admin\Post\IndexPost;
use Illuminate\Support\Facades\Route;
use Post\Controllers\PageController;

Route::prefix('/dashboard')->group( function (){
    Route::get('/page/index', [PageController::class , 'index'])->name('page.index');
    Route::get('/page/create', [PageController::class , 'create'])->name('page.Create');
    Route::get('/page/edit/{id}', [PageController::class , 'edit'])->name('page.edit');
    Route::post('/page/edit', [PageController::class , 'update'])->name('page.update');
    Route::get('/page/delete/{id}', [PageController::class , 'delete'])->name('page.delete');
    Route::get('/page/clone/{id}', [PageController::class , 'clone'])->name('page.clone');

    Route::post('/page/editor_image_upload', [PageController::class , 'picInPost'])->name('page.image.upload');

});

Route::get('/page/{post:slug}', [PageController::class , 'show']);
