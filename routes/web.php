<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\LocalAttractionsController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Route::get('/', HomeController::class)->name('home');
    Route::get('/o-nas', AboutController::class)->name('about');
    Route::get('/apartamenty', [ApartmentController::class,'index'])->name('apartment.index');
    Route::get('/apartament/{slug}', [ApartmentController::class,'show'])->name('apartment.show');
    Route::get('/lokalne-atrakcje', LocalAttractionsController::class)->name('local-attractions.index');

});
