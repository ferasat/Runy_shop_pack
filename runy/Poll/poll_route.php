<?php

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Poll\Controllers\PollController;
use Poll\Controllers\PollTemplateController;


Route::prefix('/dashboard/poll_template')->middleware('auth')->group( function (){
    Route::get('/index/', [PollTemplateController::class , 'index'])->name('poll.index.temp');
    Route::get('/create/', [PollTemplateController::class , 'create'])->name('poll.create.temp');
    Route::get('/edit_/{id}', [PollTemplateController::class , 'edit'])->name('poll.edit.temp');
    Route::get('/all_poll/{id}', [PollTemplateController::class , 'all_poll'])->name('poll.all_poll.temp');
});
Route::prefix('/dashboard/poll')->middleware('auth')->group( function (){
    Route::get('/show/{id}', [PollController::class , 'show_poll']);
});
Route::get('/show/poll/{id}', [PollTemplateController::class , 'show'])->name('poll.show.temp');
Route::get('/poll', [PollController::class , 'show'])->name('poll.show');
