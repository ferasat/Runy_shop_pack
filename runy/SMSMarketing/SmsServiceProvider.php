<?php

namespace Sms;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Imanghafoori\HeyMan\Facades\HeyMan;


class SmsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $SmsHelper = base_path('runy/SMSMarketing/Helpers/SmsHelper.php');
        if (file_exists($SmsHelper)){
            require_once ($SmsHelper) ;
        }
    }

    public function boot()
    {
        $this->loadViewsFrom(base_path('runy/SMSMarketing/views') , 'SmsView');

        $this->loadMigrationsFrom([
            base_path('runy/SMSMarketing/migrations')
        ]);

        Route::middleware('web')->group(base_path('runy/SMSMarketing/sms_route.php'));
    }
}
