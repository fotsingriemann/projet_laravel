<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'auth'], function () {
    Route::post('token', 'App\Http\Controllers\AuthController@login');
    Route::post('/signup', 'App\Http\Controllers\UserController@create');
    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('user', 'App\Http\Controllers\AuthController@user');
        Route::delete('token', 'App\Http\Controllers\AuthController@logout');
    });

});


Route::group(['prefix' => 'engins'], function () {
    Route::get('/', [App\Http\Controllers\CommentController::class, 'index']);
    Route::post('/', [App\Http\Controllers\CommentController::class, 'create']);
    Route::get('/{id}', [App\Http\Controllers\CommentController::class, 'show']);
    Route::post('/{id}', [App\Http\Controllers\CommentController::class, 'update']);
    Route::delete('/{id}', [App\Http\Controllers\CommentController::class, 'destroy']);
});