<?php

namespace App\Providers;

use App\Observers\ProductMasterObserver;
use App\ProductMaster;
use Illuminate\Support\ServiceProvider;

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
        ProductMaster::observe(ProductMasterObserver::class);
    }
}
