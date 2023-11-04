<?php

namespace Regions;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class RegionServiceProvider extends ServiceProvider
{

    public function register()
    {
        $RegionHelper = base_path('runy/Regions/RegionHelper.php');
        if (file_exists($RegionHelper)){
            require_once ($RegionHelper) ;
        }
    }


    public function boot()
    {
        $this->loadMigrationsFrom([
            base_path('runy/Regions/migrations')
        ]);

        $this->loadViewsFrom(base_path('runy/Regions/views') , 'RegionView');

        Route::middleware('web')->group(base_path('runy/Regions/region_route.php'));
    }
}
