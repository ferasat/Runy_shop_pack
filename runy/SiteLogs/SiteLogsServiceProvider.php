<?php

namespace SiteLogs;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class SiteLogsServiceProvider extends ServiceProvider
{

    public function register()
    {
        $SiteLogsHelper = base_path('runy/SalesRecord/SiteLogsHelper');
        if (file_exists($SiteLogsHelper)){
            require_once ($SiteLogsHelper) ;
        }
    }


    public function boot()
    {
        $this->loadMigrationsFrom([
            base_path('runy/SiteLogs/migrations')
        ]);

        $this->loadViewsFrom(base_path('runy/SiteLogs/views') , 'SiteLogsView');

        Route::middleware('web')->group(base_path('runy/SiteLogs/siteLogs_route.php'));
    }
}
