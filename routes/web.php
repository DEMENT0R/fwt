<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\CarController::class, 'models']);
Route::get('/models', [\App\Http\Controllers\CarController::class, 'models']);
Route::get('/models/{model}', [\App\Http\Controllers\CarController::class, 'model']);

// debug
Route::get('/cars', [\App\Http\Controllers\CarController::class, 'index']);
Route::get('/cars/{id}', [\App\Http\Controllers\CarController::class, 'show']);
