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

        Route::post('/sendrequest', [Frontend\UserReqestController::class,'sendrequest'])->name('sendrequest');   // send request from front home page by ajax
        Route::post('/servrequest', [Frontend\UserReqestController::class,'servrequest'])->name('servrequest');   // send request from service page by ajax
        Route::post('/addtocart', [Frontend\UserReqestController::class,'addtocart'])->name('addtocart');         // send request from product-details page by ajax
        Route::post('/delete_item', [Frontend\UserReqestController::class,'delete_item'])->name('delete_item');   // send request from mycart page by ajax to delete item
        Route::post('/update_qty',  [Frontend\UserReqestController::class,'update_qty'])->name('update_qty');     // send request from mycart to update item quantity


        Route::resource('allservices',Frontend\Allservices::class); // go to all services page
        Route::resource('allproducts',Frontend\AllProducts::class); // go to all products page
        Route::resource('events',Frontend\AlleventController::class); // go to all Events page
        Route::resource('Last_event',Frontend\Allevents::class);// get last event
        Route::resource('Last_agrement',Frontend\Allagrements::class);// get last Agrement
        Route::get('lastservice/{id}',[Frontend\Allservices::class,'showlast'])->name('lastservice.showlast');// get last service

     //    Route::get('X/{id}', [controllerName, 'functionName'])->name('routeName');
     //   Route::resource('contact',Frontend\ContactController::class);// Contact us Page

        // Contact Page
        Route::get('/contact-us',[ContactController::class,'contact']);
        // Route::match(['GET','POST'],'/contact','CmsController@contact');
        // Route::get('/contact-us',  ['as' => 'frontend.contact','uses' => 'Frontend\FrontendController@contact']);
        // Route::post('/contact-us', ['as' => 'frontend.do_contact', 'uses' => 'Frontend\FrontendController@do_contact']);


        Route::resource('allsections',Frontend\AllSections::class); // go to all Sections page
        Route::resource('allfeedback',Frontend\Allfeedback::class); // go to all feedback page
        //Route::resource('userprofile',Frontend\Userprofile::class);
        Route::view('profile','site.pages.userprofile')->name('profile');
        Route::get('/reserveServ', function () {
            return view('site.pages.reserveServ');
        });

        Route::middleware(['auth'])->group(function () {
            Route::resource('mycart',Frontend\CartController::class); // go to my cart page
            Route::resource('checkout',Frontend\CheckoutController::class); // go to checkout page to make order
        });

        require __DIR__.'/auth.php';
});


