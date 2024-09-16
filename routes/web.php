<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\OtherPagesController;
use App\Http\Controllers\OtherApartmentsController;
use App\Http\Controllers\LocalAttractionsController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Route::get('/', HomeController::class)->name('home');
    Route::get('/o-nas', AboutController::class)->name('about');
    Route::get('/apartamenty', [ApartmentController::class, 'index'])->name('apartment.index');
    Route::get('/apartament/{slug}', [ApartmentController::class, 'show'])->name('apartment.show');
    Route::get('/lokalne-atrakcje', LocalAttractionsController::class)->name('local-attractions');
    Route::get('/galeria', GalleryController::class)->name('gallery');
    Route::get('/kontakt', ContactController::class)->name('contact');
    Route::get('/inne-obiekty', OtherApartmentsController::class)->name('other-apartments');
    Route::get('/polityka-prywatnosci', [OtherPagesController::class,'privacyPolicy'])->name('privacy-policy');
    Route::get('/regulamin', [OtherPagesController::class,'regulations'])->name('regulations');
});
