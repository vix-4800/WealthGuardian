<?php

use App\Http\Controllers\Auth\GitHubController;
use App\Http\Controllers\Auth\GoogleController;
use Illuminate\Support\Facades\Route;

Route::controller(GoogleController::class)->group(function () {
    Route::get('/auth/google/redirect', 'redirect')->name('auth.google');
    Route::get('/auth/google/callback', 'callback');
});

Route::controller(GitHubController::class)->group(function () {
    Route::get('/auth/github/redirect', 'redirect')->name('auth.github');
    Route::get('/auth/github/callback', 'callback');
});
