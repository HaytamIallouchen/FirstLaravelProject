<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\planetController;
use App\Http\Controllers\solarSystemController;
Route::get('/', function () {
    return 'type something in url';
});
Route::get('/planets', [PlanetController::class, 'index']);
Route::get('/planets/{planet}', [PlanetController::class, 'show']);
Route::get('/solarsystems', [SolarSystemController::class, 'index']);
Route::get('/solarsystems/{id}', [SolarSystemController::class, 'show']);