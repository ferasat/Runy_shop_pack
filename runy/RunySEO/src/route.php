<?php

use Illuminate\Support\Facades\Route;
use RunySEO\Controllers\RunySeoSettingController;

Route::prefix('/dashboard/runy-seo')->group( function (){
    Route::get('/index/', [RunySeoSettingController::class , 'index'])->name('runy_seo');
    Route::post('/save/', [RunySeoSettingController::class , 'save'])->name('runy_seo_save');
});

