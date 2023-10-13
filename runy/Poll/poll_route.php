<?php

use Illuminate\Support\Facades\Route;
use Poll\Controllers\PollController;


Route::prefix('/dashboard')->middleware('auth')->group( function (){
    Route::get('/poll/', [PollController::class , 'index'])->name('poll.index');
    Route::get('/poll/create', [PollController::class , 'create'])->name('poll.Create');
    Route::get('/poll/edit/{id}', [PollController::class , 'edit'])->name('poll.edit');

});

