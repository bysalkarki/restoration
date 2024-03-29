<?php

use App\Http\Controllers\AppsettingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('admin.welcome');
    })->name('admin.index');
    Route::resource('slider', App\Http\Controllers\SliderController::class)->except('show');
    Route::resource('video', App\Http\Controllers\VideoController::class)->except('show');
    Route::resource('blog', App\Http\Controllers\BlogController::class)->except('show');
    Route::resource('menu', App\Http\Controllers\MenuController::class)->except('show');
    Route::resource('category', App\Http\Controllers\CategoryController::class)->except('show');
    Route::resource('gallery', App\Http\Controllers\GalleryController::class)->except('show');
    Route::resource('event', App\Http\Controllers\EventController::class)->except('show');
    Route::resource('team', App\Http\Controllers\TeamController::class)->except('show');
    Route::resource('partner', App\Http\Controllers\PartnerController::class)->except('show');
    Route::resource('testimonial', App\Http\Controllers\TestimonialController::class)->except('show');
    Route::resource('extra', App\Http\Controllers\ExtraController::class)->except('show');
    Route::resource('counter', App\Http\Controllers\CounterController::class)->except('show');
    Route::resource('popup', App\Http\Controllers\PopupController::class)->except('show');

    Route::prefix('appsetting/{type?}')->name('appsetting.')->group(function () {
        Route::get('/', [AppsettingController::class, 'index'])->name('index');
        Route::post('/', [AppsettingController::class, 'store'])->name('store');
    });
    Route::resource('user', UserController::class);
    Route::prefix('contact')->name('contact.')->group(function () {
        Route::get('/', [ContactController::class, 'index'])->name('index');
        Route::delete('/{id}', [ContactController::class, 'destroy'])->name('destroy');
    });
    Route::prefix('user-password')->group(function () {
        Route::get('/{id}', [UserController::class, 'resetPasswordView'])->name('resetPasswordView');
        Route::patch('/{id}', [UserController::class, 'resetPassword'])->name('resetPassword');
    });


});
