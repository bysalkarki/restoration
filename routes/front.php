<?php

use App\Http\Controllers\Front\DetailController;
use App\Http\Controllers\FrontendController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/blog', [DetailController::class, 'blog'])->name('blog');
Route::get('/contact', [DetailController::class, 'contact'])->name('contact');
Route::get('/team', [DetailController::class, 'team'])->name('team');
Route::get('/about', [DetailController::class, 'about'])->name('about');
