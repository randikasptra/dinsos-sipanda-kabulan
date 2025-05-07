<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('auth.login');
})->name('login');


Route::get('/dashboard', function () {
    return view('layouts.dashboard');
});

