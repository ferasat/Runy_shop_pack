<?php


use Illuminate\Support\Facades\Route;
use SendMessages\Controllers\SendMessagesController;


Route::prefix('/dashboard/send-messages')->group( function (){
    Route::get('/index/', [SendMessagesController::class , 'index'])->name('send.messages.index');
    Route::get('/create/', [SendMessagesController::class , 'create'])->name('send.messages.create');
    Route::get('/send_msg/', [SendMessagesController::class , 'send_msg']);

});

