<?php

namespace Employee;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Imanghafoori\HeyMan\Facades\HeyMan;


class EmployeeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $PostHelper = base_path('runy/Employee/Helpers/EmployeeHelper.php');
        if (file_exists($PostHelper)){
            require_once ($PostHelper) ;
        }
    }

    public function boot()
    {
        $this->loadViewsFrom(base_path('runy/Employee/views') , 'EmployeeView');

        /*$this->loadMigrationsFrom([
            base_path('runy/Employee/migrations')
        ]);*/

        Route::middleware('web')->group(base_path('runy/Employee/employee_route.php'));
    }
}
