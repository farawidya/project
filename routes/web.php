<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NomorController;
use App\Http\Controllers\ProjekController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\ProjectController;

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

Route::get('/manpen/edit', function () {
    return view('manpen.edit', [
        "title" => "Home"
    ]);
});

Route::get('/manpen', function () {
    return view('manpen.index', [
        "title" => "Home"
    ]);
});


Route::get('/manpen/create', function () {
    return view('manpen.create', [
        "title" => "Home"
    ]);
});

Route::get('/manpen/show', function () {
    return view('manpen/show', [
        "title" => "Home"
    ]);

});

Route::get('/project/show', function () {
    return view('project/show', [
        "title" => "Home"
    ]);
});

Route::get('/projek/create', function () {
    return view('projek/create', [
        "title" => "Create"
    ]);
});

Route::get('/projek/edit', function () {
    return view('projek/edit', [
        "title" => "edit"
    ]);
});

Route::get('/nomor/show', function () {
    return view('nomor/show', [
        "title" => "Home"
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users', \App\Http\Controllers\UserController::class)
    ->middleware('auth');

Route::resource('post', PostController::class);

Route::resource('nomor', NomorController::class);
Route::resource('projek', ProjekController::class);
Route::resource('manpen', DokumenController::class);
