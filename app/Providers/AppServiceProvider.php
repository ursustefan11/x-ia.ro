<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Jenssegers\Date\Date;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Paginator::defaultView('pagination::default');

        Paginator::defaultSimpleView('pagination::default');

        Carbon::setLocale('ro');
        // setlocale(LC_TIME, config('app.locale'));	
        setlocale(LC_TIME, array('ro.utf-8', 'ro_RO.UTF-8', 'ro_RO.utf-8', 'ro', 'ro_RO', 'ro_RO.ISO8859-2'));
    }
}
