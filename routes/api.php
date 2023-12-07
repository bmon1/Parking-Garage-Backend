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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('names', [App\Http\Controllers\NameController::class, 'names']);

// users routes
Route::get('/users', [App\Http\Controllers\UserController::class, 'index']);

// vehicles routes
Route::get('/vehicles', [App\Http\Controllers\VehicleController::class, 'index']);

// garage routes
