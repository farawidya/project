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
use App\Http\Controllers\TaskController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\DokumenController;
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
    return view('home', [
        "title" => "home"
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
// Route::get('/dokumen', function () {
//     return view('dokumen', [
//     ]);
// });

// Route::get('/dokumen/view', function () {
//     return view('dokumen.view', [
//     ]);
// });



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

Route::get('/jadwalmeeting', function () {
    return view('jadwalmeeting', [
        "title" => "jadwalmeeting"
    ]);
});

Route::get('/task', function () {
    return view('task', [
    ]);
});

Route::get('/task.lead', function () {
    return view('task.lead', [
    ]);
});

Route::get('/task.lead/{id}', function ($id) {
    $proyek = \App\Models\Proyek::find($id);

    $data['status_task'] = \App\Models\StatusTask::all();

    return view('task.lead', [
        'proyek' => $proyek,
        'data' => $data
    ]);
})->name('task.lead');
Route::post('/task.lead/tambahtask', [TaskController::class, 'store'])->name('task.store');

Route::get('/task.anggota', function () {
   return view('task.anggota', [
   ]);
});

Route::get('/proyek.tim/{id}', [App\Http\Controllers\ProyekController::class, 'tim'])->name('proyek.tim');
Route::post('/proyek.tim/addTim', [App\Http\Controllers\ProyekController::class, 'addTim'])->name('proyek.tim.store');
Route::delete('/proyek.tim/deleteTim/{id}', [App\Http\Controllers\ProyekController::class, 'deleteTim'])->name('proyek.tim.delete');

//Route::get('/task', [App\Http\Controllers\TaskController::class, 'task'])->name('task');

Route::get('/task', [App\Http\Controllers\TaskController::class, 'index'])->name('/task');
Route::get('/task.lead', [App\Http\Controllers\TaskController::class, 'lead'])->name('task.lead');
Route::get('/jadwalmeeting', [App\Http\Controllers\JadwalmeetingController::class, 'index'])->name('jadwalmeeting');
Route::post('/jadwalmeeting', [App\Http\Controllers\JadwalmeetingController::class, 'store'])->name('jadwalmeeting.store');

Route::get('/marketing', 'MarketingController@index')->name('/marketing');
Route::post('/marketing', 'MarketingController@store')->name('store.marketing');
Route::patch('/marketing/{id}/update', 'MarketingController@update')->name('update.marketing');
Route::get('/client', [App\Http\Controllers\ClientController::class, 'index'])->name('client');
Route::delete('/client', [App\Http\Controllers\ClientController::class, 'destroy'])->name('client.destroy');
Route::post('/client', [App\Http\Controllers\ClientController::class, 'store'])->name('client.store');
Route::put('/client/{id}/update', [App\Http\Controllers\ClientController::class, 'update'])->name('client.update');

Route::patch('/client/{id}', 'ClientController@update')->name('update.client');

Route::get('/proyek', [App\Http\Controllers\ProyekController::class, 'index'])->name('proyek');
Route::post('/proyek', [App\Http\Controllers\ProyekController::class, 'store'])->name('store.proyek');
Route::put('/proyek/{id}/update', [App\Http\Controllers\ProyekController::class, 'update'])->name('proyek.update');
Route::resource('users', \App\Http\Controllers\UserController::class)
    ->middleware('auth');

Route::get('/developer', [App\Http\Controllers\DeveloperController::class, 'index'])->name('developer');
Route::get('/dokumen', [App\Http\Controllers\DokumenController::class, 'index'])->name('dokumen.index');
Route::get('/dokumen/view', [App\Http\Controllers\DokumenController::class, 'view'])->name('dokumen.view');
Route::post('/dokumen', [App\Http\Controllers\DokumenController::class, 'view'])->name('dokumen.store');
Route::delete('/dokumen', [App\Http\Controllers\DokumenController::class, 'view'])->name('dokumen.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::resource('users', \App\Http\Controllers\UserController::class)
    ->middleware('auth');

Route::resource('post', PostController::class);
Route::resource('nomor', NomorController::class);
Route::resource('projek', ProjekController::class);
// Route::resource('dokumen', DokumenController::class);
Route::resource('proyek', ProyekController::class);

Route::resource('mom', MomController::class);

Route::resource('marketing', MarketingController::class);

Route::resource('devlop', DeveloperController::class);
