<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;


class DashboardController extends Controller
{
    public function index()
    {
        $pengaduan = Pengaduan::latest()->paginate(5); 

        return view('admin.dashboard', compact('pengaduan'));
    }

    public function superadmin()
    {
        return view('superadmin.addAdmin'); // dashboard superadmin
    }
    
}


