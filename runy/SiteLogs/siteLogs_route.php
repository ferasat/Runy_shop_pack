<?php

use Illuminate\Support\Facades\Route;
use SiteLogs\Controllers\SiteLogsController;

Route::get('/dashboard/logs/index', [SiteLogsController::class , 'index'])->middleware('auth')->name('logs.index');
