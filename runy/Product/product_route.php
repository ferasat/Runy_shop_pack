<?php

use Illuminate\Support\Facades\Route;
use Product\Controllers\CategoryProductController;
use Product\Controllers\ProductController;


Route::prefix('/dashboard')->middleware('auth')->group( function (){
    Route::get('/product/', [ProductController::class , 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class , 'create'])->name('product.Create');
    Route::get('/product/edit/{id}', [ProductController::class , 'edit'])->name('product.edit');
    Route::post('/product/edit/{id}', [ProductController::class , 'update']);
    Route::get('/product/delete/{id}', [ProductController::class , 'destroy']);

    Route::post('/product/editor_image_upload', [ProductController::class , 'picInPost'])->name('product.image.upload');

    Route::get('/product/category' , [CategoryProductController::class , 'index'])->name('category.product');
});

