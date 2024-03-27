<?php


use Illuminate\Support\Facades\Route;
use SendMessages\Controllers\SendMessagesController;


Route::prefix('/dashboard/runy-message-box')->group( function (){
    Route::get('/index/', [SendMessagesController::class , 'index'])->name('msgb.index');
    Route::get('/create/', [SendMessagesController::class , 'create'])->name('msgb.create');
    Route::get('/send_msg/', [SendMessagesController::class , 'send_msg']);

});

