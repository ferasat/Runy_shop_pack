<?php

use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\SettingController;
use App\Models\RunySliderVue;
use FilesManager\Models\FileManager;
use HomePage\HomePageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Post\Models\Post;

Route::get('/', [HomePageController::class , 'index']);
Route::get('/dashboard/users', [\App\Http\Controllers\UserController::class , 'index']);
Route::get('/dashboard/new-user', [\App\Http\Controllers\UserController::class , 'create']);


Route::get('/home', [DashboardController::class , 'index' ])->middleware('auth');
Route::get('/dashboard', [DashboardController::class , 'index' ])->middleware('auth')->name('dashboard');
Route::post('/dashboard/editor_upload', [CKEditorController::class , 'upload' ])->name('editor.upload');
Route::get('/dashboard/settings', [SettingController::class , 'index'])->middleware('auth')->name('setting.index');
Route::post('/dashboard/setting/saveLogoIcon', [SettingController::class , 'saveLogoIcon'])->middleware('auth')->name('saveLogoIcon');
Route::get('/dashboard/settings_home', [SettingController::class , 'index'])->middleware('auth')->name('setting.home');

Route::post('/dashboard/editor_upload', [CKEditorController::class , 'upload' ])->name('uploadCK');

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

Route::get('/نمایندگی-برادر-در-اصفهان', function (){
    $post = Post::find(256);

    $title = $post->name ;
    $description= $post->titleSeo .' | '. $post->focusKeyword;
    $breadcrumbs = ["/"=>" خانه " , "/blog" => " وبلاگ  ", "/page/".$post->slug => $post->name ];
    $post->numberView = $post->numberView + 1 ;
    $post->save();
    $owl_carousel = true;
    $posts = Post::query()->where([
        'statusPublish' => 'publish',
        'typePost' => 'post',
    ])->orderByDesc('id')->take(8)->get();


    return view('PostView::showPost' , compact('title' , 'description' ,
        'breadcrumbs' , 'post' , 'posts'));
});

Route::get('/test/movePost', [\App\Http\Controllers\TestController::class , 'postMove' ]);
