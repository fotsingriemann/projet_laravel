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
    return view('auth/login');
});

Route::get('/home', function () {
    return view('layouts.apps');
})->middleware(['auth'])->name('home');

Route::get('/test', function () {
    return view('layouts.test');
});

require __DIR__.'/auth.php';

Route::resource('admin/entreprise', 'App\Http\Controllers\Admin\EntrepriseController');
Route::resource('admin/user', 'App\Http\Controllers\Admin\UserController');
Route::resource('admin/engintype', 'App\Http\Controllers\Admin\EngintypeController');
Route::resource('admin/engin', 'App\Http\Controllers\Admin\EnginController');
Route::resource('admin/patente', 'App\Http\Controllers\Admin\PatenteController');
Route::resource('admin/visite-technique', 'App\Http\Controllers\Admin\VisiteTechniqueController');
Route::resource('admin/patente', 'App\Http\Controllers\Admin\PatenteController');
Route::resource('admin/visite-technique', 'App\Http\Controllers\Admin\VisiteTechniqueController');