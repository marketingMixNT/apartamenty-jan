<?php

namespace App\Providers;

use App\Models\Home;
use App\Models\Slide;
use App\Models\Gallery;
use App\Models\Features;
use App\Models\Apartment;
use App\Models\LocalAttraction;
use App\Models\PageAttractions;
use App\Observers\HomeObserver;
use App\Observers\SlideObserver;
use App\Observers\FeatureObserver;
use App\Observers\GalleryObserver;
use App\Observers\ApartmentObserver;
use Illuminate\Support\ServiceProvider;
use App\Observers\LocalAttractionObserver;
use App\Observers\PageAttractionsObserver;
use BezhanSalleh\FilamentLanguageSwitch\LanguageSwitch;


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

        LanguageSwitch::configureUsing(function (LanguageSwitch $switch) {
            $switch
                ->locales(['pl',]); // also accepts a closure
        });
       
        Apartment::observe(ApartmentObserver::class);
        Home::observe(HomeObserver::class);
        Gallery::observe(GalleryObserver::class);
        LocalAttraction::observe(LocalAttractionObserver::class);
        Features::observe(FeatureObserver::class);
        PageAttractions::observe(PageAttractionsObserver::class);

    }
}
