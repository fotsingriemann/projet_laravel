<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EnginApiController;
use App\Http\Controllers\Api\AssuranceApiController;
use App\Http\Controllers\Api\EnginTypeApiController;
use App\Http\Controllers\Api\PatenteApiController;
use App\Http\Controllers\Api\VisiteTechniqueApiController;
use App\Http\Controllers\Api\EntrepriseApiController;
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
    Route::get('/', [EnginApiController::class, 'index']);
    Route::post('/', [EnginApiController::class, 'store']);
    Route::get('/{id}', [EnginApiController::class, 'show']);
    Route::post('/{id}', [EnginApiController::class, 'update']);
    Route::delete('/{id}', [EnginApiController::class, 'destroy']);
});


Route::group(['prefix' => 'engin_types'], function () {
    Route::get('/', [EngintypeApiController::class, 'index']);
    Route::post('/', [EngintypeApiController::class, 'store']);
    Route::get('/{id}', [EngintypeApiController::class, 'show']);
    Route::post('/{id}', [EngintypeApiController::class, 'update']);
    Route::delete('/{id}', [EngintypeApiController::class, 'destroy']);
});


Route::group(['prefix' => 'assurances'], function () {
    Route::get('/', [AssuranceApiController::class, 'index']);
    Route::post('/', [AssuranceApiController::class, 'store']);
    Route::get('/{id}', [AssuranceApiController::class, 'show']);
    Route::post('/{id}', [AssuranceApiController::class, 'update']);
    Route::delete('/{id}', [AssuranceApiController::class, 'destroy']);
});



Route::group(['prefix' => 'patentes'], function () {
    Route::get('/', [PatenteApiController::class, 'index']);
    Route::post('/', [PatenteApiController::class, 'store']);
    Route::get('/{id}', [PatenteApiController::class, 'show']);
    Route::post('/{id}', [PatenteApiController::class, 'update']);
    Route::delete('/{id}', [PatenteApiController::class, 'destroy']);
});


Route::group(['prefix' => 'visite_techniques'], function () {
    Route::get('/', [VisiteTechniqueApiController::class, 'index']);
    Route::post('/', [VisiteTechniqueApiController::class, 'store']);
    Route::get('/{id}', [VisiteTechniqueApiController::class, 'show']);
    Route::post('/{id}', [VisiteTechniqueApiController::class, 'update']);
    Route::delete('/{id}', [VisiteTechniqueApiController::class, 'destroy']);
});



Route::group(['prefix' => 'entreprises'], function () {
    Route::get('/', [EntrepriseApiController::class, 'index']);
    Route::post('/', [EntrepriseApiController::class, 'store']);
    Route::get('/{id}', [EntrepriseApiController::class, 'show']);
    Route::post('/{id}', [EntrepriseApiController::class, 'update']);
    Route::delete('/{id}', [EntrepriseApiController::class, 'destroy']);
});

