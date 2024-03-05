<?php

namespace RunyWarehousing;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;


class RunyWarehousingServiceProvider extends ServiceProvider
{
    public function register()
    {
        $runyWarehousingHelper = base_path('runy/RunyWarehousing/RunyWarehousingHelper.php');
        if (file_exists($runyWarehousingHelper)){
            require_once ($runyWarehousingHelper) ;
        }
    }

    public function boot()
    {
        $this->loadViewsFrom(base_path('runy/RunyWarehousing/views') , 'RunyWarehousingView');

        $this->loadMigrationsFrom([
            base_path('runy/RunyWarehousing/migrations')
        ]);

        Route::middleware('web')->group(base_path('runy/RunyWarehousing/warehousing_route.php'));
    }
}
