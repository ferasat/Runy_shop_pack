<?php

use Illuminate\Support\Facades\Route;
use Sms\Controllers\SmsMarketingController;

Route::prefix('/dashboard/sms')->group( function (){
    Route::get('/setting/', [SmsMarketingController::class , 'setting'])->name('sms_setting');
});
