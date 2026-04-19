<?php

namespace App\Http\Controllers;

use App\Models\SubmenuDonor;        

class DonorDarahController extends Controller
{
    public function index()
{
    $submenus = SubmenuDonor::orderBy('urutan', 'asc')->get();

    return view('admin.donor.menu', compact('submenus'));
}
    public function show($slug)
{
    $submenu = SubmenuDonor::where('slug', $slug)->firstOrFail();

    return view('admin.donor.submenu.index', compact('submenu'));
}

}
