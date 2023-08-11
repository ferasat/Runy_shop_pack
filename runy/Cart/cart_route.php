<?php

use Cart\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use Product\Controllers\CategoryProductController;
use Product\Controllers\ProductController;


Route::prefix('/dashboard')->group( function (){
    Route::get('/carts', [CartController::class , 'index'])->name('index.carts');
    Route::get('/cart/show/{id}', [CartController::class , 'show']);


    Route::get('/cart/create/', [CartController::class , 'create'])->name('create.cart');
    Route::get('/cart/edit/{cart}', [CartController::class , 'edit']);
    Route::get('/cart/delete/{id}', [CartController::class , 'destroy']);
});


Route::get('/cart/', [CartController::class , 'my_cart']);
Route::get('/invoice/', [CartController::class , 'invoice'])->name('invoice');

