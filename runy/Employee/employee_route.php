<?php

use Customer\Controllers\CustomerController;
use Employee\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::prefix('/dashboard/emp')->group( function (){
    Route::get('/index/', [EmployeeController::class , 'index'])->name('employee.index');
    Route::get('/create/', [EmployeeController::class , 'create'])->name('employee.create');
    Route::get('/id/{id}', [EmployeeController::class , 'show'])->name('employee.show');
});

