<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard'); // admin
    }

    public function superadmin()
    {
        return view('superadmin.addAdmin'); // dashboard superadmin
    }
    
}


