<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Debt Tracker';
});


Route::get('/debts',function (){
    return 'My Debts';
    });