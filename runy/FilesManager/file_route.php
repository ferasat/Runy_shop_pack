<?php

use FilesManager\Controllers\FileManagerController;
use Illuminate\Support\Facades\Route;



Route::prefix('/dashboard/files')->group( function (){
    Route::get('/index/', [FileManagerController::class , 'index'])->name('files.index');
});

