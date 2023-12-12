<?php

use Cart\Controllers\CartController;
use Cart\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;
use Product\Controllers\CategoryProductController;
use Product\Controllers\ProductController;


Route::prefix('/dashboard')->middleware('auth')->group( function (){
    Route::get('/carts', [CartController::class , 'index'])->name('index.carts');
    Route::get('/cart/show/{id}', [CartController::class , 'show']);


    Route::get('/cart/create/', [CartController::class , 'create'])->name('create.cart');
    Route::get('/cart/edit/{cart}', [CartController::class , 'edit']);
    Route::get('/cart/delete/{id}', [CartController::class , 'destroy']);
});


Route::get('/cart/', [CartController::class , 'my_cart'])->name('cart');
Route::get('/invoice/', [CartController::class , 'invoice'])->name('invoice');
Route::get('/pay_invoice/{id}', [InvoiceController::class, 'pay'])->name('pay.invoice');
Route::get('/in_pay/result/', 'InvoiceController@result')->name('pay.result');
Route::post('/in_pay/result/', 'InvoiceController@result');

Route::post('/online_service_reserve/', [CartController::class , 'online_reserve'])->name('online.service.reserve');
