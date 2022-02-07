<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/dashboard', function () {
    return view('dashboard', [
        "title" => "dashboard"
    ]);
});

Route::get('/admin', function () {
    return view('admin', [
    ]);
});

Route::get('/project', function () {
    return view('project', [
        "title" => "project"
    ]);
});
Route::get('/analis', function () {
    return view('analis', [
        "title" => "analis"
    ]);
});

Route::get('/desain', function () {
    return view('desain', [
    ]);
});

Route::get('/developer', function () {
    return view('developer', [
        "title" => "developer"
    ]);
});

Route::get('/marketing', function () {
    return view('marketing', [
        "title" => "marketing"
    ]);
});

Route::get('/proyek', function () {
    return view('proyek', [
    ]);
});

Route::get('/mom', function () {
    return view('mom', [
        "title" => "mom"
    ]);
});

Route::get('/pendokumen', function () {
    return view('pendokumen', [
        "title" => "pendokumen"
    ]);
});

Route::get('/dokproject', function () {
    return view('dokproject', [
    ]);
});

Route::get('/meeting', function () {
    return view('meeting', [
        "title" => "meeting"
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users', \App\Http\Controllers\UserController::class)
    ->middleware('auth');

Route::resource('post', PostController::class);
