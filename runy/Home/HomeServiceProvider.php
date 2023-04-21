<?php

namespace HomePage;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Imanghafoori\HeyMan\Facades\HeyMan;


class HomeServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->loadViewsFrom(base_path('runy/Home/views') , 'HomeView');

        $this->loadMigrationsFrom([
            base_path('runy/Home/migrations')
        ]);

    }
}
