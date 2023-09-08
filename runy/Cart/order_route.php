<?php

use Illuminate\Support\Facades\Route;
use Product\Controllers\CategoryProductController;
use Product\Controllers\ProductController;


Route::prefix('/order')->group( function (){
    Route::get('/cart/', [ProductController::class , 'index']);
});
Route::get('/pay_invoice', [\Cart\Controllers\InvoiceController::class, 'pay'])->name('pay.invoice');


