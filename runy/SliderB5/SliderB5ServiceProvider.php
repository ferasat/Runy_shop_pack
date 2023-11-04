<?php

namespace RunySliderB5;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Imanghafoori\HeyMan\Facades\HeyMan;


class SliderB5ServiceProvider extends ServiceProvider
{
    public function register()
    {
        $helper = base_path('runy/SliderB5/runy-slider-helper.php');
        if (file_exists($helper)){
            require_once ($helper) ;
        }
    }

    public function boot()
    {
        $this->loadViewsFrom(base_path('runy/SliderB5/views') , 'RunySliderView');

        $this->loadMigrationsFrom([
            base_path('runy/SliderB5/migrations')
        ]);

        Route::middleware('web')->group(base_path('runy/SliderB5/slider_route.php'));
    }
}
