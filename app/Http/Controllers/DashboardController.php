<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        /* compact(): Enviando dados para a view */
        return view('dashboard');
    }
}