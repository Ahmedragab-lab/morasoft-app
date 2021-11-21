<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Frontend;


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],function () {
        Route::resource('/', Frontend\FrontendController::class);           // as a guest
        //========================================================================================================================================================
        Route::middleware(['auth'])->group(function () {
            Route::resource('/front', Frontend\FrontendController::class);      // as a auth user
            Route::post('/sendrequest', [Frontend\UserReqestController::class,'sendrequest'])->name('sendrequest');   // send request from front home page by ajax
            // Route::post('/servrequest', [Frontend\UserReqestController::class,'servrequest'])->name('servrequest');   // send request from service page by ajax
            Route::post('/addtocart', [Frontend\UserReqestController::class,'addtocart'])->name('addtocart');   // send request from product-details page by ajax
            Route::resource('allservices',Frontend\Allservices::class); // go to all services page
            Route::resource('allproducts',Frontend\AllProducts::class); // go to all products page
            Route::resource('allproducts',Frontend\CartController::class); // go to all products page
        });

        require __DIR__.'/auth.php';
});


