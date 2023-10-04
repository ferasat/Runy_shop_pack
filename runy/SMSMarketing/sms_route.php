<?php

use Customer\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::prefix('/dashboard/sms')->group( function (){
    Route::get('/setting/', [CustomerController::class , 'index'])->name('sms_setting');
});

