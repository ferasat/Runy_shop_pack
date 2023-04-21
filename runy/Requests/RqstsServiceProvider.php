<?php

namespace Rqsts;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Imanghafoori\HeyMan\Facades\HeyMan;


class RqstsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $PostHelper = base_path('runy/Requests/Helpers/RqstsHelper.php');
        if (file_exists($PostHelper)){
            require_once ($PostHelper) ;
        }
    }

    public function boot()
    {
        $this->loadViewsFrom(base_path('runy/Requests/views') , 'RqstsView');

        $this->loadMigrationsFrom([
            base_path('runy/Requests/migrations')
        ]);

        Route::middleware('web')->group(base_path('runy/Requests/rqsts_route.php'));
    }
}
