<?php

use Illuminate\Support\Facades\Route;
use Pixielity\Foundation\Controllers\EnumTestController;
use Pixielity\Foundation\Controllers\RootController;
use Pixielity\Foundation\Controllers\SerializerTestController;

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

// Serializer test routes
Route::prefix('test/serializer')->group(function () {
    Route::get('/', [SerializerTestController::class, 'index'])->name('foundation.api.test.serializer.index');
    Route::get('/php', [SerializerTestController::class, 'testPhpSerializer'])->name('foundation.api.test.serializer.php');
    Route::get('/json', [SerializerTestController::class, 'testJsonSerializer'])->name('foundation.api.test.serializer.json');
    Route::get('/all', [SerializerTestController::class, 'testAll'])->name('foundation.api.test.serializer.all');
});
