<?php

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

Route::post('register', [\App\Http\Controllers\API\AuthController::class, 'register']);
Route::post('login', [\App\Http\Controllers\API\AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    Route::get('users/{id}', [\App\Http\Controllers\API\UserController::class, 'show']);
    Route::put('users/{id}', [\App\Http\Controllers\API\UserController::class, 'update']);

    Route::post('songs', [\App\Http\Controllers\API\SongController::class, 'store']);
    Route::delete('songs/{id}/{user_id}', [\App\Http\Controllers\API\SongController::class, 'destroy']);

    Route::get('user/{user_id}/songs', [\App\Http\Controllers\API\SongsByUserController::class, 'index']);

    Route::post('logout', [\App\Http\Controllers\API\AuthController::class, 'logout']);

});
