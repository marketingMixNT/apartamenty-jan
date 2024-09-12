<?php

namespace App\Providers;

use App\Models\Apartment;
use App\Models\LocalAttraction;
use App\Models\Slide;
use App\Models\Testimonial;
use App\Observers\ApartmentObserver;
use App\Observers\LocalAttractionObserver;
use App\Observers\SlideObserver;
use App\Observers\TestimonialObserver;
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
        LocalAttraction::observe(LocalAttractionObserver::class);
        Slide::observe(SlideObserver::class);
    }
}
