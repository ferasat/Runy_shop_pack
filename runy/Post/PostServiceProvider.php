<?php

namespace Post;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Imanghafoori\HeyMan\Facades\HeyMan;


class PostServiceProvider extends ServiceProvider
{
    public function register()
    {
        $PostHelper = base_path('runy/Post/Helpers/PostHelper.php');
        if (file_exists($PostHelper)){
            require_once ($PostHelper) ;
        }
    }

    public function boot()
    {
        $this->loadViewsFrom(base_path('runy/Post/views') , 'PostView');

        $this->loadMigrationsFrom([
            base_path('runy/Post/migrations')
        ]);

        Route::middleware('web')->group(base_path('runy/Post/post_show_route.php'));
        Route::middleware('web')->group(base_path('runy/Post/post_route.php'));
        Route::middleware('web')->group(base_path('runy/Post/page_route.php'));
    }
}
