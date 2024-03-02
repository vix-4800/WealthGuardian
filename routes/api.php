<?php

use App\Http\Controllers\Api\AccountController;
use App\Http\Controllers\Api\BankCardController;
use App\Http\Controllers\Api\ExpenseController;
use App\Http\Controllers\Api\IncomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('v1')
    ->group(function () {
        Route::apiResource('cards', BankCardController::class);
        Route::apiResource('accounts', AccountController::class);
        Route::apiResource('expenses', ExpenseController::class);
        Route::apiResource('incomes', IncomeController::class);
    });

Route::fallback(function () {
    return response()->json([
        'status' => 422,
        'error' => 'Invalid URL requested',
    ])
        ->setStatusCode(422);
});
