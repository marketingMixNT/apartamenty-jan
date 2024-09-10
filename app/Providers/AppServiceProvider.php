<?php

namespace App\Providers;

use App\Models\Apartment;
use App\Observers\ApartmentObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       
        Apartment::observe(ApartmentObserver::class);
    }
}
