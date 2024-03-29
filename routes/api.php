<?php

use App\Http\Controllers\Api\AuthenticationController;
use App\Http\Controllers\API\KuesionerGiziController;
use App\Http\Controllers\API\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Api', 'prefix' => 'v1'], function () {
    Route::post('login', [AuthenticationController::class, 'store']);
    Route::post('register', [RegisterController::class, 'store']);
    Route::post('logout', [AuthenticationController::class, 'destroy'])->middleware('auth:api');
    Route::get('me', [AuthenticationController::class, 'show'])->middleware('auth:api');
    Route::post('kuesioner/gizi', [KuesionerGiziController::class, 'store'])->middleware('auth:api');
});
