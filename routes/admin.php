
<?php
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\TrackingstepsController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Auth\AdminAuthController;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['auth:admin','localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],function () {


        // Route::get('adminlogin', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
        Route::resource('/dashboard', Admin\AdminsController::class);
        Route::resource('/users', Admin\UsersController::class);
        Route::resource('/services',Admin\ServiceController::class);
        Route::resource('/sections',Admin\SectionController::class);
        Route::resource('/products',Admin\ProductController::class);
        Route::resource('/feedbacks',Admin\FeedbackController::class);
        Route::resource('/tracking_steps',Admin\TrackingstepsController::class);
        Route::resource('/events',Admin\EventController::class);
        Route::resource('/agreements',Admin\AgreementController::class);
        Route::resource('/companies',Admin\CompanyController::class);
        Route::resource('/orders',Admin\OrderController::class);
        // Route::put('addprice',[Admin\OrderController::class,'addprice'])->name('addprice');  // admin can add price to serice
        Route::resource('/cartitems',Admin\CartOrderController::class); // to show orders from checkout my cart page
    });

require __DIR__ . '/auth.php';



