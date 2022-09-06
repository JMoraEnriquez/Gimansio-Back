<?php

use App\Http\Controllers\api\prueba;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::prefix('/user')->group(function(){

    Route::post('/store', [UserController::class, 'store']);
    Route::post('/login', [LoginController::class, 'login']);
    //Route::get('/index', [UserController::class, 'index']);
    Route::middleware('auth:api')->get('/index', [UserController::class, 'index']);
});

Route::get('/holaMundo', [prueba::class, 'holaMundo'] );
