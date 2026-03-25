<?php

use Illuminate\Support\Facades\Route;
use Pixielity\Foundation\Controllers\RootController;

Route::get('/', RootController::class)->name('foundation.index');
