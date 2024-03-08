<?php


use Illuminate\Support\Facades\Route;
use RunyWarehousing\Controllers\RunyWMProductController;
use RunyWarehousing\Controllers\RunyWMSController;


Route::prefix('/dashboard/warehousing')->middleware('auth')->group( function (){
    Route::get('/index/', [RunyWMSController::class , 'index'])->name('rwms.index');
    Route::get('/create/', [RunyWMSController::class , 'create'])->name('rwms.create');

    Route::get('/products/', [RunyWMProductController::class , 'index'])->name('rwmp.index');
    Route::get('/products/', [RunyWMProductController::class , 'create'])->name('rwmp.create');

    Route::get('/product-category/', [RunyWMProductController::class , 'index_cat'])->name('rwmp.cat.index');
});

