<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Route::get('/', HomeController::class)->name('home');
    Route::get('/o-nas', AboutController::class)->name('about');

});
