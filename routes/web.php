<?php

use Illuminate\Support\Facades\Route;

// debug
Route::get('/cars', [\App\Http\Controllers\CarController::class, 'index']);
Route::get('/cars/{id}', [\App\Http\Controllers\CarController::class, 'show']);
