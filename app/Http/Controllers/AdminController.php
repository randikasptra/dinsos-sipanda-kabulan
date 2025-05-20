<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Debug dulu
      //  dd('Berhasil masuk ke AdminController!');

        return view('pages.admin.dashboard');

    }
}
