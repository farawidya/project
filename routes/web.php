<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MomController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ManmomController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\managementdeveloper;
use App\Http\Controllers\MarketingController;
use App\Http\Controllers\ManagementmomController;
use App\Http\Controllers\ProyekController;


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

// Route::get('/', function () {
//     return view('index', [
//         "title" => "Home"
//     ]);
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users', \App\Http\Controllers\UserController::class)
    ->middleware('auth');

Route::resource('post', PostController::class);

Route::resource('proyek', ProyekController::class);

Route::resource('mom', MomController::class);

Route::resource('marketing', MarketingController::class);

Route::resource('devlop', managementdeveloper::class);