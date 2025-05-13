<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('auth.login');
})->name('login');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/form/{id}', [FormController::class, 'show'])->name('form.show');
Route::post('/form/{id}', [FormController::class, 'store'])->name('form.store');



