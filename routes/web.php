<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('auth.login');
})->name('login');


Route::get('/dashboard', function () {
    return view('layouts.dashboard');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
