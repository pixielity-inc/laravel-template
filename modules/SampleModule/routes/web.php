<?php

use Illuminate\Support\Facades\Route;
use Pixielity\SampleModule\Http\Controllers\SampleModuleController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('samplemodules', SampleModuleController::class)->names('samplemodule');
});
