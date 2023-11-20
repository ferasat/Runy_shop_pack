<?php

namespace Poll;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Imanghafoori\HeyMan\Facades\HeyMan;


class PollServiceProvider extends ServiceProvider
{
    public function register()
    {
        $PollHelper = base_path('runy/Poll/PollHelpers.php');
        if (file_exists($PollHelper)){
            require_once ($PollHelper) ;
        }
    }

    public function boot()
    {
        $this->loadViewsFrom(base_path('runy/Poll/views') , 'PollView');

        $this->loadMigrationsFrom([
            base_path('runy/Poll/migrations')
        ]);

        Route::middleware('web')->group(base_path('runy/Poll/poll_route.php'));
        Route::middleware('web')->group(base_path('runy/Poll/poll_show_route.php'));

    }
}
