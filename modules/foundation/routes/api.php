<?php

use Illuminate\Support\Facades\Route;
use Pixielity\Foundation\Controllers\EnumTestController;
use Pixielity\Foundation\Controllers\RootController;

// Root API endpoint
Route::get('/', RootController::class)->name('foundation.api.index');

// Versioned API endpoint (dynamic version)
Route::get('/{version}', RootController::class)
    ->where('version', 'v[0-9]+')
    ->name('foundation.api.version.index');

// Enum test routes
Route::prefix('test/enums')->group(function () {
    Route::get('/', [EnumTestController::class, 'index'])->name('foundation.api.test.enums.index');
    Route::get('/user-status', [EnumTestController::class, 'userStatus'])->name('foundation.api.test.enums.user-status');
    Route::get('/order-status', [EnumTestController::class, 'orderStatus'])->name('foundation.api.test.enums.order-status');
    Route::get('/all', [EnumTestController::class, 'all'])->name('foundation.api.test.enums.all');
});
