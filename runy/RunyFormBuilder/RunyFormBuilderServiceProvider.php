<?php

namespace RunyFormBuilder;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Imanghafoori\HeyMan\Facades\HeyMan;


class RunyFormBuilderServiceProvider extends ServiceProvider
{
    public function register()
    {
        $PollHelper = base_path('runy/RunyFormBuilder/RunyFormBuilderHelpers.php');
        if (file_exists($PollHelper)){
            require_once ($PollHelper) ;
        }
    }

    public function boot()
    {
        $this->loadViewsFrom(base_path('runy/RunyFormBuilder/views') , 'RunyFormBuilderView');

        $this->loadMigrationsFrom([
            base_path('runy/RunyFormBuilder/migrations')
        ]);

        Route::middleware('web')->group(base_path('runy/RunyFormBuilder/form_builder_route.php'));

    }
}
