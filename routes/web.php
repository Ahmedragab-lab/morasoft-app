<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Frontend;


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],function () {
        Route::resource('/', Controllers\Frontend\FrontendController::class);           // as a guest
        //========================================================================================================================================================
        Route::middleware(['auth:web'])->group(function () {
            Route::resource('/front', Frontend\FrontendController::class);      // as a auth user
            Route::post('/sendrequest', [Frontend\UserReqestController::class,'sendrequest'])->name('sendrequest');   // send request by ajax
            Route::resource('allservices',Frontend\Allservices::class); // go to all services page
        });
        // Route::group(['guard' => 'web', 'guard' => 'admin'], function () {
        //     Route::resource('/front', Controllers\Frontend\FrontendController::class);      // as a auth user
        //     Route::post('/sendrequest', [Controllers\Frontend\UserReqestController::class,'sendrequest'])->name('sendrequest');   // send request by ajax
        // });
        //========================================================================================================================================================
        require __DIR__.'/auth.php';
});


