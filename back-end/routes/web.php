<?php

use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;


Route::prefix('api')->group(function () {
    Route::prefix('appointment')->group(function () {
        Route::post('', AppointmentController::class . '@store');
    });
});