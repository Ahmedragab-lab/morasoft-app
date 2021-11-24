<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Frontend;
use App\Models\Contact;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],function () {
        Route::resource('/', Frontend\FrontendController::class);           // as a guest
        //========================================================================================================================================================
        Route::resource('/front', Frontend\FrontendController::class);      // as a auth user

        Route::post('/addtocart', [Frontend\UserReqestController::class,'addtocart'])->name('addtocart');   // send request from product-details page by ajax
        Route::post('/sendrequest', [Frontend\UserReqestController::class,'sendrequest'])->name('sendrequest');   // send request from front home page by ajax
        // Route::post('/servrequest', [Frontend\UserReqestController::class,'servrequest'])->name('servrequest');   // send request from service page by ajax

        Route::resource('allservices',Frontend\Allservices::class); // go to all services page
        Route::resource('allproducts',Frontend\AllProducts::class); // go to all products page
        Route::resource('events',Frontend\AlleventController::class); // go to all Events page
        Route::resource('Last_event',Frontend\Allevents::class);// get last event
        Route::resource('Last_agrement',Frontend\Allagrements::class);// get last Agrement
        Route::get('lastservice/{id}',[Frontend\Allservices::class,'showlast'])->name('lastservice.showlast');// get last service

     //    Route::get('X/{id}', [controllerName, 'functionName'])->name('routeName');
        Route::resource('contact',Frontend\ContactController::class);// Contact us Page

        // Contact Page
        // Route::match(['GET','POST'],'/contact','CmsController@contact');


        Route::middleware(['auth'])->group(function () {
        Route::resource('mycart',Frontend\CartController::class); // go to my cart page

         // ->last();  go to all Last_event page
        });

        require __DIR__.'/auth.php';
});


