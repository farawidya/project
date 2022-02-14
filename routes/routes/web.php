<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;


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
    return view('index', [
        "title" => "Home"
    ]);
});

Route::get('/manadmin', function () {
    return view('manadmin.index', [
        "title" => "admin"
    ]);
});

Route::get('/manadmin/create', function () {
    return view('manadmin/create', [
        "title" => "create"
    ]);
});

Route::get('/manadmin/show', function () {
    return view('manadmin/show', [
        "title" => "detail"
    ]);
}); 

Route::get('/manadmin/edit', function () {
    return view('manadmin/edit', [
        "title" => "edit"
    ]);
});

Route::get('/client', function () {
    return view('manclient.index', [
        "title" => "admin"
    ]);
});

Route::get('/manclient/create', function () {
    return view('manclient/create', [
        "title" => "create"
    ]);
});

Route::get('/manclient/show', function () {
    return view('manclient/show', [
        "title" => "detail"
    ]);
}); 

Route::get('/manclient/edit', function () {
    return view('manclient/edit', [
        "title" => "edit"
    ]);
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users', \App\Http\Controllers\UserController::class)       
    ->middleware('auth');

Route::resource('post', PostController::class);
Route::resource('admin', AdminController::class);
Route::resource('manclient', ClientController::class);
Route::resource('manadmin', AdminController::class);







