<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HolaController;

Route::post('login', [AuthController::class, 'login']);
Route::post('registro', [AuthController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('hola', [HolaController::class, 'getHola']);
    Route::get('hola_mundo', [HolaController::class, 'getHolaMundo']);
});