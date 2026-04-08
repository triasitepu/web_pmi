<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        if (strtolower(auth()->user()->peran) !== 'superadmin') {
            abort(403);
        }

        $penggunas = Pengguna::all();

        return view('superadmin.show', compact('penggunas')); // dashboard superadmin
    }

    public function create()
    {
        return view('superadmin.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pengguna' => 'required',
            'email' => 'required|email|unique:pengguna,email',
            'password' => 'required|min:6',
        ]);

        Pengguna::create([
            'nama_pengguna' => $request->nama_pengguna,
            'email' => $request->email,
            'kata_sandi' => Hash::make($request->password),
            'peran' => 'Admin',
            'status' => 'Aktif'
        ]);

        return redirect()->route('admin.admin.index')
            ->with('success', 'Admin berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $admin = Pengguna::findOrFail($id);
        return view('superadmin.edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $admin = Pengguna::findOrFail($id);

        $admin->update([
            'nama_pengguna' => $request->nama_pengguna,
            'email' => $request->email,
        ]);

        return redirect()->route('admin.admin.index')
            ->with('success', 'Data berhasil diupdate!');
    }

    public function toggleStatus($id)
    {
        $admin = Pengguna::findOrFail($id);

        if (auth()->id() == $admin->id_pengguna) {
            return back()->with('error', 'Tidak bisa menonaktifkan diri sendiri');
        }

        $admin->status = $admin->status == 'Aktif' ? 'Tidak Aktif' : 'Aktif';
        $admin->save();

        return back()->with('success', 'Status berhasil diubah');
    }

    public function destroy($id)
    {
        $admin = Pengguna::findOrFail($id);

        if (auth()->id() == $admin->id_pengguna) {
            return back()->with('error', 'Tidak bisa menghapus diri sendiri');
        }

        $admin->delete();

        return redirect()->route('admin.admin.index')
            ->with('success', 'Admin berhasil dihapus!');
    }
}