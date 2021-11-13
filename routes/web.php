<?php

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
    Route::resource('appsetting', App\Http\Controllers\AppsettingController::class)->only('index', 'store');
});
