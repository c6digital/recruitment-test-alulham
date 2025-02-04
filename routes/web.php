<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HealthController;

Route::get('/', [HealthController::class, 'show'])->name('health.show');
Route::post('/', [HealthController::class, 'results'])->name('health.results');
