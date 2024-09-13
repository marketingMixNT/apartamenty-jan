<?php

namespace App\Providers;

use App\Models\Slide;
use App\Models\Gallery;
use App\Models\Apartment;
use App\Models\LocalAttraction;
use App\Observers\SlideObserver;
use App\Observers\GalleryObserver;
use App\Observers\ApartmentObserver;
use Illuminate\Support\ServiceProvider;
use App\Observers\LocalAttractionObserver;

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
        Gallery::observe(GalleryObserver::class);
        LocalAttraction::observe(LocalAttractionObserver::class);
        Slide::observe(SlideObserver::class);
    }
}
