<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThemeController;

Route::get('/', [ThemeController::class, 'index']);
Route::get('/theme/{theme}', [ThemeController::class, 'setTheme']);
