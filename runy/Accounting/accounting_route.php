<?php
use Illuminate\Support\Facades\Route;
use RunyAccounting\Controllers\AccountingController;


Route::get('/dashboard/Acc/official_bills', [AccountingController::class , 'official_bills'])->name('official_bills');

Route::get('/dashboard/Acc/Accounting_', [AccountingController::class , 'index'])->name('setting_accounting');
