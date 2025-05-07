<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('auth.login');
})->name('login');


Route::get('/app', function () {
    return view('app');
});

