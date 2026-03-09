<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengguna;

class UserController extends Controller
{
    public function index()
    {
        // pengaman tambahan
        if (strtolower(auth()->user()->peran) !== 'superadmin') {
            abort(403);
        }

        $penggunas = Pengguna::all();

        return view('admin.users.index', compact('penggunas'));
    }
}
