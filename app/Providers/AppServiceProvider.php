<?php

namespace App\Providers;

use App\Models\Cta;
use App\Models\Home;
use App\Models\Slide;
use App\Models\Safety;
use App\Models\Gallery;
use App\Models\Features;
use App\Models\Apartment;
use App\Models\PageAbout;
use App\Models\PageRooms;
use App\Models\PageSafety;
use App\Models\OtherObject;
use App\Models\PageContact;
use App\Models\PageGallery;
use App\Models\PageTravels;
use App\Models\Regulations;
use App\Models\PrivacyPolicy;
use App\Models\PageAboutBlock;
use App\Observers\CtaObserver;
use App\Models\LocalAttraction;
use App\Models\PageAttractions;
use App\Observers\HomeObserver;
use App\Models\PageOtherObjects;
use App\Observers\SlideObserver;
use App\Observers\SafetyObserver;
use App\Observers\FeatureObserver;
use App\Observers\GalleryObserver;
use App\Observers\ApartmentObserver;
use App\Observers\PageAboutObserver;
use App\Observers\PageRoomsObserver;
use App\Observers\PageSafetyObserver;
use App\Observers\OtherObjectObserver;
use App\Observers\PageContactObserver;
use App\Observers\PageGalleryObserver;
use App\Observers\PageTravelsObserver;
use App\Observers\RegulationsObserver;
use Illuminate\Support\ServiceProvider;
use App\Observers\PrivacyPolicyObserver;
use App\Observers\PageAboutBlockObserver;
use App\Observers\LocalAttractionObserver;
use App\Observers\PageAttractionsObserver;
use App\Observers\PageOtherObjectsObserver;
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
       
        Home::observe(HomeObserver::class);
        Cta::observe(CtaObserver::class);
        
        Features::observe(FeatureObserver::class);

        PageContact::observe(PageContactObserver::class);
        PageTravels::observe(PageTravelsObserver::class);
        
        Apartment::observe(ApartmentObserver::class);
        PageRooms::observe(PageRoomsObserver::class);

        PageAbout::observe(PageAboutObserver::class);
        PageAboutBlock::observe(PageAboutBlockObserver::class);

        LocalAttraction::observe(LocalAttractionObserver::class);
        PageAttractions::observe(PageAttractionsObserver::class);

        Gallery::observe(GalleryObserver::class);
        PageGallery::observe(PageGalleryObserver::class);

        PageSafety::observe(PageSafetyObserver::class);
        Safety::observe(SafetyObserver::class);

        PageOtherObjects::observe(PageOtherObjectsObserver::class);
        OtherObject::observe(OtherObjectObserver::class);

        PrivacyPolicy::observe(PrivacyPolicyObserver::class);
        Regulations::observe(RegulationsObserver::class);


    }
}
