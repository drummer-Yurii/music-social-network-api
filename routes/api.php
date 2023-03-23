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
    Route::post('logout', [\App\http\Controllers\API\AuthController::class, 'logout']);
    Route::get('inside-mware', function () {
        return response()->json('Success', 200);
    });
});
