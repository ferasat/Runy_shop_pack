<?php

namespace FilesManager;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Imanghafoori\HeyMan\Facades\HeyMan;


class FilesServiceProvider extends ServiceProvider
{
    public function register()
    {
        $ProductHelper = base_path('runy/FilesManager/FilesHelpers.php');
        if (file_exists($ProductHelper)){
            require_once ($ProductHelper) ;
        }
    }

    public function boot()
    {
        $this->loadViewsFrom(base_path('runy/FilesManager/views') , 'FilesManagerView');

        $this->loadMigrationsFrom([
            base_path('runy/FilesManager/migrations')
        ]);

        Route::middleware('web')->group(base_path('runy/FilesManager/file_route.php'));
    }
}
