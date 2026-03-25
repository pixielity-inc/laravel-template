<?php

use Illuminate\Support\Facades\Route;
use Pixielity\Foundation\Controllers\RootController;

// Root API endpoint
Route::get('/', RootController::class)->name('foundation.api.index');

// Versioned API endpoint (dynamic version)
Route::get('/{version}', RootController::class)
    ->where('version', 'v[0-9]+')
    ->name('foundation.api.version.index');
