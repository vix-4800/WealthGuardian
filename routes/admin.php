<?php

use Illuminate\Support\Facades\Route;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->controller(App\Http\Controllers\ProfileController::class)->group(function () {
});
