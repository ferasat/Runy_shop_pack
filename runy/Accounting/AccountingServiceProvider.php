<?php

namespace RunyAccounting;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AccountingServiceProvider extends ServiceProvider
{
    public function register()
    {
        $RegionHelper = base_path('runy/Accounting/accountingHelper.php');
        if (file_exists($RegionHelper)){
            require_once ($RegionHelper) ;
        }
    }


    public function boot()
    {
        $this->loadMigrationsFrom([
            base_path('runy/Accounting/migrations')
        ]);

        $this->loadViewsFrom(base_path('runy/Accounting/views') , 'AccountingView');

        Route::middleware('web')->group(base_path('runy/Accounting/accounting_route.php'));
    }
}
