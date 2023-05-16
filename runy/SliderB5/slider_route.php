<?php

use Illuminate\Support\Facades\Route;
use SliderB5\Controllers\SliderB5Controller;

Route::prefix('/dashboard/sliderB5')->group( function (){
    Route::get('/index/', [SliderB5Controller::class , 'index'])->name('sliderB5.index');
    Route::get('/create/', [SliderB5Controller::class , 'create'])->name('sliderB5.create');
    Route::get('/id/{id}', [SliderB5Controller::class , 'show'])->name('sliderB5.show');

    Route::post('/upload_pic', [SliderB5Controller::class , 'uploadFile'])->name('uploadFile.slider');
});

