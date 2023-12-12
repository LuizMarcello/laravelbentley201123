<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
<<<<<<< HEAD
    public function index()
    {
        /* compact(): Enviando dados para a view */
        return view('dashboard');
    }
}
=======
    public function index() {
        return view('admin.dasboard');
    }
}
>>>>>>> 10a3a4bd59a91e859784a776319587cf0580555d
