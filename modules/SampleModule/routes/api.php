<?php

use Illuminate\Support\Facades\Route;
use Pixielity\SampleModule\Http\Controllers\SampleModuleController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('samplemodules', SampleModuleController::class)->names('samplemodule');
});
