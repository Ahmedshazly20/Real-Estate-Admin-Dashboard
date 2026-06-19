<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PropertyController;

Route::get('/', [DashboardController::class, 'index']);

Route::get('/properties', [PropertyController::class, 'index']);

Route::get('/properties/{id}', [PropertyController::class, 'show']);