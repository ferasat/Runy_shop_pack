<?php

use Customer\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::prefix('/dashboard/customer')->middleware('auth')->group( function (){
    Route::get('/index/', [CustomerController::class , 'index'])->name('customer.index');
    Route::get('/edit/{id}', [CustomerController::class , 'edit'])->name('customer.edit');
    Route::get('/setting/', [CustomerController::class , 'index'])->name('customer.setting');
    Route::get('/create/', [CustomerController::class , 'create'])->name('customer.create');
    Route::get('/show/{id}', [CustomerController::class , 'show'])->name('customer.show');
});

Route::prefix('/user')->group( function (){
    Route::get('/dashboard/', [CustomerController::class , 'dashboard'])->name('customer.dashboard');

});
