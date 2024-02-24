<?php

use App\Http\Controllers\Auth\GoogleController;
use Illuminate\Support\Facades\Route;

Route::controller(GoogleController::class)->group(function () {
    Route::get('/auth/google/redirect', 'redirect')->name('auth.google');
    Route::get('/auth/google/callback', 'callback');
});
