<?php

namespace App\Providers;

use App\Models\RepairRequest;
use App\Observers\RepairRequestObserver;
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
        RepairRequest::observe(RepairRequestObserver::class);
    }
}
