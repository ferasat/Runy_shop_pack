<?php

use Illuminate\Support\Facades\Route;
use Poll\Controllers\PollController;


Route::prefix('/poll')->group( function (){
    Route::get('/show/12', function (){
        return redirect('https://mortazavistore.ir/poll/show/15');
    });
    Route::get('/show/{id}', [PollController::class , 'show'])->name('poll.show');
});

