<?php

use Illuminate\Support\Facades\Route;
use RunyFormBuilder\Controllers\RunyFormBuilderController;

Route::prefix('/dashboard/runy_form_builder')->middleware('auth')->group( function (){
    Route::get('/index/', [RunyFormBuilderController::class , 'index'])->name('runy.form.builder.index');
});
