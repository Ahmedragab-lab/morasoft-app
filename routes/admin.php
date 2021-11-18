
<?php
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\TrackingstepsController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers;
use App\Http\Controllers\Auth\AdminAuthController;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['auth:admin','localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],function () {


        // Route::get('adminlogin', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
        Route::resource('/dashboard', Controllers\Admin\AdminsController::class);
        Route::resource('/users', Controllers\Admin\UsersController::class);
        Route::resource('/services',Controllers\Admin\ServiceController::class);
        Route::resource('/sections',Controllers\Admin\SectionController::class);
        Route::resource('/products',Controllers\Admin\ProductController::class);
        Route::resource('/feedbacks',Controllers\Admin\FeedbackController::class);

        Route::resource('/tracking_steps',Controllers\Admin\TrackingstepsController::class);

        Route::resource('/events',Controllers\Admin\EventController::class);
        Route::resource('/agreements',Controllers\Admin\AgreementController::class);
    });

require __DIR__ . '/auth.php';



