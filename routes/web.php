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
        Route::resource('/front', Frontend\FrontendController::class);      // as a auth user

        Route::post('/addtocart', [Frontend\UserReqestController::class,'addtocart'])->name('addtocart');   // send request from product-details page by ajax
        Route::post('/sendrequest', [Frontend\UserReqestController::class,'sendrequest'])->name('sendrequest');   // send request from front home page by ajax

      //Route::post('/servrequest', [Frontend\UserReqestController::class,'servrequest'])->name('servrequest');   // send request from service page by ajax

        Route::post('/servrequest', [Frontend\UserReqestController::class,'servrequest'])->name('servrequest');   // send request from service page by ajax
        Route::post('/delete_item', [Frontend\UserReqestController::class,'delete_item'])->name('delete_item');   // send request from mycart page by ajax to delete item


        Route::resource('allservices',Frontend\Allservices::class); // go to all services page
        Route::resource('allproducts',Frontend\AllProducts::class); // go to all products page
        Route::resource('allsections',Frontend\AllSections::class); // go to all Sections page
        //Route::resource('userprofile',Frontend\Userprofile::class);
         Route::view('profile','site.pages.userprofile')->name('profile');

        Route::resource('allproducts',Frontend\AllProducts::class);


        Route::get('/reserveServ', function () {
       return view('site.pages.reserveServ');
       });




        // go to all products page
        Route::get('/reserveServ', function () {
            return view('site.pages.reserveServ');
        });






        Route::resource('allfeedback',Frontend\Allfeedback::class); // go to all feedback page

        Route::middleware(['auth'])->group(function () {
            Route::resource('mycart',Frontend\CartController::class); // go to my cart page
        });

        require __DIR__.'/auth.php';
});


