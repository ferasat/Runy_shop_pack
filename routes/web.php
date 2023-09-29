<?php

use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RunySliderVueController;
use App\Http\Controllers\SettingController;
use App\Models\RunySliderVue;
use FilesManager\Models\FileManager;
use HomePage\HomePageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
Route::get('/dashboard/settings', [SettingController::class , 'index'])->middleware('auth')->name('setting.index');

Route::post('/upload-image', function(Request $request) {
    dd($request->all());
    $file = $request->file('upload');

    $destinationPath = public_path('/upload-image'); // مسیر ذخیره عکس‌ها
    $fileName = $file->getClientOriginalName();
    $file->move($destinationPath, $fileName);

    $url = url('uploads/editor/' . $fileName);

    $newFile = new FileManager();
    $newFile->uploaded = 1;
    $newFile->filename = $fileName;
    $newFile->where = 'editor-post';
    $newFile->path = $url;
    $newFile->user_id = Auth::id();
    $newFile->save();

    $response = new \stdClass();
    $response->uploaded = 1;
    $response->fileName = $fileName;
    $response->url = $url;

    return response()->json($response);
});

//// ---------------

Route::group(['prefix' => '/Artisan'], function () {
    Route::get('/clear-cache', function () {
        $exitCode = Artisan::call('cache:clear');
        return '<h1>Cache facade value cleared</h1>';
    });

    Route::get('/migrate', function () {
        $exitCode = Artisan::call('migrate', [
            '--force' => true,
        ]);
        return '<h1>دیتابیس ساخته شد</h1>';
    });

//Clear Route cache:
    Route::get('/route-clear', function () {
        $exitCode = Artisan::call('route:clear');
        return '<h1>Route cache cleared</h1>';
    });

//Clear View cache:
    Route::get('/view-clear', function () {
        $exitCode = Artisan::call('view:clear');
        return '<h1>View cache cleared</h1>';
    });

//Clear Config cache:
    Route::get('/config-cache', function () {
        $exitCode = Artisan::call('config:cache');
        return '<h1>Clear Config cleared</h1>';
    });
    Route::get('/clear-cache-all', function () {

        Artisan::call('cache:clear');
        dd("Cache Clear All");

    });

});
