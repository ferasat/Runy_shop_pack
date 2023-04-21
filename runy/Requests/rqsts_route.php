<?php

use Customer\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use Rqsts\Controllers\RequestDepartmentController;
use Rqsts\Controllers\RqstsController;

Route::prefix('/dashboard/rqsts')->group( function (){
    Route::get('/index/', [RqstsController::class , 'index'])->name('rqsts.index');
    Route::get('/create/', [RqstsController::class , 'create'])->name('rqsts.create');
    Route::get('/show/{id}', [RqstsController::class , 'show'])->name('rqsts.show');
    Route::post('/replay/', [RqstsController::class , 'replay'])->name('rqsts.replay');

    Route::get('/department/index/', [RequestDepartmentController::class , 'index'])->name('department.index');
});

Route::get('/fix_request' , [RqstsController::class , 'fix_request'])->name('fix_request');
Route::post('/fix_request_save' , [RqstsController::class , 'fix_request_save'])->name('fix_request_save');

