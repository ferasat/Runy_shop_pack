<?php

use Illuminate\Support\Facades\Route;
use Poll\Controllers\PollController;


Route::prefix('/poll')->group( function (){
    Route::get('/show/{id}', [PollController::class , 'show'])->name('poll.show');

});

