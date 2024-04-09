<?php


use Cart\Controllers\CartApiController;
use Illuminate\Support\Facades\Route;

Route::get('/api/V1/cart/index', [CartApiController::class , 'my_cart'])->middleware('auth:sanctum')->name('myCartApi');



