<?php


use Livewire\Livewire;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use Filament\Http\Middleware\Authenticate;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ApartmentController;
use App\Http\Middleware\SetLocaleForFilament;
use App\Http\Controllers\OtherPagesController;

use App\Http\Controllers\OtherApartmentsController;
use App\Http\Controllers\LocalAttractionsController;
use App\Http\Controllers\SafetyController;
use App\Http\Controllers\TransfersController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Livewire::setUpdateRoute(function ($handle) {
        return Route::post('/livewire/update', $handle);
    });

    Route::get('/', HomeController::class)->name('home');
    Route::get(LaravelLocalization::transRoute('routes.about'), AboutController::class)->name('about');
    Route::get(LaravelLocalization::transRoute('routes.rooms'), [ApartmentController::class, 'index'])->name('apartment.index');
    Route::get(LaravelLocalization::transRoute('routes.room'), [ApartmentController::class, 'show'])->name('apartment.show');
    Route::get(LaravelLocalization::transRoute('routes.local-attractions'), LocalAttractionsController::class)->name('local-attractions');
    Route::get(LaravelLocalization::transRoute('routes.transfers'), TransfersController::class)->name('transfers');
    Route::get(LaravelLocalization::transRoute('routes.safety'), SafetyController::class)->name('safety');
    Route::get(LaravelLocalization::transRoute('routes.gallery'), GalleryController::class)->name('gallery');
    Route::get(LaravelLocalization::transRoute('routes.contact'), ContactController::class)->name('contact');
    Route::get(LaravelLocalization::transRoute('routes.other-objects'), OtherApartmentsController::class)->name('other-apartments');
    Route::get(LaravelLocalization::transRoute('routes.privacy-policy'), [OtherPagesController::class, 'privacyPolicy'])->name('privacy-policy');
    Route::get(LaravelLocalization::transRoute('routes.regulations'), [OtherPagesController::class, 'regulations'])->name('regulations');
});
