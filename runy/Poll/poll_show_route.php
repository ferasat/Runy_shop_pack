<?php

use Illuminate\Support\Facades\Route;
use Poll\Controllers\PollController;


Route::prefix('/poll')->middleware('auth')->group( function (){
    Route::get('/show/{id}', [PollController::class , 'show'])->name('poll.show');

});

