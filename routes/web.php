<?php

use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RunySliderVueController;
use App\Models\RunySliderVue;
use HomePage\HomePageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomePageController::class , 'index']);
Route::get('/slider', [RunySliderVueController::class , 'pics' ]);


Route::get('/home', [DashboardController::class , 'index' ])->middleware('auth');
Route::get('/dashboard', [DashboardController::class , 'index' ])->middleware('auth')->name('dashboard');
Route::post('/dashboard/editor_upload', [CKEditorController::class , 'upload' ])->name('editor.upload');

