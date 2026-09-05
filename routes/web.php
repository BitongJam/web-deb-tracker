<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DebtController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return 'Debt Tracker';
});


Route::get('/debts',[DebtController::class, 'index'])->name('debts.index');
Route::get('/debts/create',[DebtController::class, 'create'])->name('debts.create');
Route::post('/debts',[DebtController::class, 'store'])->name('debts.store');
Route::get('/debts/{id}',[DebtController::class,'show'])->name('debts.show');


Route::get('/dashboard',[DashboardController::class, 'dashboard']);