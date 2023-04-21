<?php

use Illuminate\Support\Facades\Route;
use Product\Controllers\CategoryProductController;
use Product\Controllers\ProductController;


Route::prefix('/product')->group( function (){
    Route::get('/{product:slug}/', [ProductController::class , 'show']);
    Route::get('/cat/{category_product:slug}', [CategoryProductController::class , 'show']);
});

Route::get('/shop/', [ProductController::class , 'shop']);
