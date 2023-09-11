<?php

use Illuminate\Support\Facades\Route;
use RunySliderB5\Controllers\RunySliderB5Controller;


Route::prefix('/dashboard/sliderB5')->group( function (){
    Route::get('/index/', [RunySliderB5Controller::class , 'index'])->name('sliderB5.index');
    Route::get('/create/', [RunySliderB5Controller::class , 'create'])->name('sliderB5.create');
    Route::get('/id/{id}', [RunySliderB5Controller::class , 'show'])->name('sliderB5.show');

    Route::post('/upload_pic', [RunySliderB5Controller::class , 'uploadFile'])->name('uploadFile.slider');
});

