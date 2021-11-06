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

Route::get('/', function () {
    return config('settings.name');
})->name('index');

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.layouts.admin');
    });
});

Route::resource('slider', App\Http\Controllers\SliderController::class);

Route::resource('video', App\Http\Controllers\VideoController::class);
Route::resource('blog', App\Http\Controllers\BlogController::class);

Route::resource('menu', App\Http\Controllers\MenuController::class);

Route::resource('category', App\Http\Controllers\CategoryController::class);

Route::resource('gallery', App\Http\Controllers\GalleryController::class);

Route::resource('event', App\Http\Controllers\EventController::class);

Route::resource('team', App\Http\Controllers\TeamController::class);

Route::resource('partner', App\Http\Controllers\PartnerController::class);

Route::resource('appsetting', App\Http\Controllers\AppsettingController::class)->only('index', 'store');
