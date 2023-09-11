<?php

namespace RunySliderB5;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Imanghafoori\HeyMan\Facades\HeyMan;


class SliderB5ServiceProvider extends ServiceProvider
{
    public function register()
    {
/*        $SmsHelper = base_path('runy/SMSMarketing/Helpers/SmsHelper.php');
        if (file_exists($SmsHelper)){
            require_once ($SmsHelper) ;
        }*/
    }

    public function boot()
    {
        $this->loadViewsFrom(base_path('runy/SliderB5/views') , 'SmsView');

        $this->loadMigrationsFrom([
            base_path('runy/SliderB5/migrations')
        ]);

        Route::middleware('web')->group(base_path('runy/SliderB5/slider_route.php'));
    }
}
