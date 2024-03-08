<?php
use Illuminate\Support\Facades\Route;
use RunyAccounting\Controllers\AccountingController;
use ReserveBook\Controllers\ReservationsController ;

Route::get('/dashboard/cip/official_bills', [AccountingController::class , 'official_bills'])->name('official_bills');
Route::post('/dashboard/cip/change_status_acc_cip', [ReservationsController::class , 'change_status_acc_cip']);

Route::get('/dashboard/Accounting_', [AccountingController::class , 'index'])->name('setting_accounting');
