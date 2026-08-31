<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DebtController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return 'Debt Tracker';
});


Route::get('/debts',[DebtController::class, 'index']);
Route::get('/debts/create',[DebtController::class, 'create']);
Route::post('/debts',[DebtController::class, 'store']);


Route::get('/dashboard',[DashboardController::class, 'dashboard']);