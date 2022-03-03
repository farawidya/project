<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MomController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NomorController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjekController;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\MarketingController;


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
        "title" => "management Admin"
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

Route::get('/pendokumen', function () {
    return view('pendokumen', [
        "title" => "pendokumen"
    ]);
});

Route::get('/dokumen', function () {
    return view('dokumen', [
    ]);
});

Route::get('/dokumen/view', function () {
    return view('dokumen.view', [
    ]);
});

Route::get('/meeting', function () {
    return view('meeting', [
        "title" => "meeting"
    ]);
});

Route::get('/client', function () {
    return view('client.index', [
        "title" => "client"
    ]);
});

Route::get('/nomor/show', function () {
    return view('nomor/show', [
        "title" => "Home"
    ]);
});

Route::get('/marketing', 'MarketingController@index')->name('/marketing');
Route::post('/marketing', 'MarketingController@store')->name('store.marketing');    
Route::patch('/marketing/{id}', 'MarketingController@update')->name('update.marketing');
Route::get('/client', [App\Http\Controllers\ClientController::class, 'index'])->name('client');
// Route::post('/client', 'ClientController@store')->name('store.client'); 
Route::post('/client', [App\Http\Controllers\ClientController::class, 'index'])->name('client.store'); 
    
Route::patch('/client/{id}', 'ClientController@update')->name('update.client');


Route::get('/developer', [App\Http\Controllers\DeveloperController::class, 'index'])->name('developer');
Route::get('/dokumen', [App\Http\Controllers\DokumenController::class, 'index'])->name('dokumen');
Route::get('/dokumen', [App\Http\Controllers\DokumenController::class, 'index'])->name('dokumen.store');
Route::post('/getStatusProject',[DokumenController::class,'getStatusProject'])->name('getStatusProject');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::resource('users', \App\Http\Controllers\UserController::class)
    ->middleware('auth');

Route::resource('post', PostController::class);
Route::resource('nomor', NomorController::class);
Route::resource('projek', ProjekController::class);
Route::resource('manpen', DokumenController::class);
Route::resource('proyek', ProyekController::class);

Route::resource('mom', MomController::class);

Route::resource('marketing', MarketingController::class);

Route::resource('devlop', DeveloperController::class);
