<?php

use Illuminate\Support\Facades\Route;
use Product\Controllers\CategoryProductController;
use Product\Controllers\DiscountController;
use Product\Controllers\ProductController;
use Product\Controllers\ProductFeaturesController;
use Product\Controllers\ServiceController;


Route::prefix('/dashboard')->middleware('auth')->group( function (){
    Route::get('/product/', [ProductController::class , 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class , 'create'])->name('product.Create');
    Route::get('/product/edit/{id}', [ProductController::class , 'edit'])->name('product.edit');
    Route::post('/product/edit/{id}', [ProductController::class , 'update']);
    Route::get('/product/delete/{id}', [ProductController::class , 'destroy']);

    Route::get('/product/feature/index', [ProductFeaturesController::class , 'index'])->name('feature.index');

    Route::post('/product/editor_image_upload', [ProductController::class , 'picInPost'])->name('product.image.upload');

    Route::get('/product/category' , [CategoryProductController::class , 'index'])->name('category.product');

    //----- discount
    Route::get('/discount/', [DiscountController::class , 'index'])->name('discount.index');
    Route::get('/discount/create', [DiscountController::class , 'create'])->name('discount.create');
    Route::get('/discount/edit/{id}', [DiscountController::class , 'edit'])->name('discount.edit');
    Route::post('/discount/edit/{id}', [DiscountController::class , 'update']);


    //----- services
    Route::get('/services/', [ServiceController::class , 'index'])->name('service.index');
    Route::get('/service/create', [ServiceController::class , 'create'])->name('service.create');
    Route::get('/service/edit/{id}', [ServiceController::class , 'edit'])->name('service.edit');
    Route::post('/service/edit/{id}', [ServiceController::class , 'update']);
    Route::get('/service/category' , [CategoryProductController::class , 'indexService'])->name('category.service');
});

