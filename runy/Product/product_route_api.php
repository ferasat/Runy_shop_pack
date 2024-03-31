<?php

use Illuminate\Support\Facades\Route;
use Product\Controllers\ProductController;
use Product\Controllers\ServiceController;


Route::prefix('/api/')->group( function (){
    Route::get('/products/index', [ProductController::class , 'index_api'])->name('product.index.api');
    Route::get('/product/{product:slug}', [ProductController::class , 'product_slug_api'])->name('product.slug.api');
    Route::get('/product_id/{id}', [ProductController::class , 'product_id_api'])->name('product.id.api');

    //----- services
    Route::get('/services/', [ServiceController::class , 'index_api'])->name('service.index.api');
});

