<?php

namespace App\Http\Controllers;

use App\Models\SubmenuDiklat;
use App\Models\Diklat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SubmenuDiklatController extends Controller
{
    public function index()
    {
        $submenus = SubmenuDiklat::with('diklat')
                    ->orderBy('urutan', 'asc')
                    ->get();

        return view('admin.diklat.submenu.index', compact('submenus'));
    }

    public function create()
    {
        $diklat = Diklat::all();
        return view('admin.diklat.submenu.tambah', compact('diklat'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'diklat_id' => 'required|exists:diklat,id',
            'nama_submenu'   => 'required|string|max:255',
            'urutan'         => 'nullable|integer|min:0',
            'isi'            => 'required',
            'foto'           => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $submenu = new SubmenuDiklat();
        $submenu->diklat_id = $validated['diklat_id'];
        $submenu->nama_submenu   = $validated['nama_submenu'];
        $submenu->slug           = Str::slug($validated['nama_submenu']);
        $submenu->urutan         = $validated['urutan'] ?? 0;
        $submenu->isi            = $validated['isi'];
        $submenu->is_active      = 1;

        // Upload Foto
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('diklat', 'public');
            $submenu->foto = $path;
        }

        $submenu->save();

        return redirect()->route('admin.diklat-submenu.index')
                         ->with('success', 'Submenu berhasil ditambahkan');
    }

    public function edit($id)
    {
        $submenu = SubmenuDiklat::findOrFail($id);
        $diklat = Diklat::all();

        return view('admin.diklat.submenu.edit', compact('submenu', 'diklat'));
    }

    public function update(Request $request, $id)
    {
        $submenu = SubmenuDiklat::findOrFail($id);

        $validated = $request->validate([
            'diklat_id' => 'required|exists:diklat,id',
            'nama_submenu'   => 'required|string|max:255',
            'urutan'         => 'nullable|integer|min:0',
            'isi'            => 'required',
            'is_active'      => 'nullable|boolean',
            'foto'           => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $submenu->diklat_id = $validated['diklat_id'];
        $submenu->nama_submenu   = $validated['nama_submenu'];
        $submenu->slug           = Str::slug($validated['nama_submenu']);
        $submenu->urutan         = $validated['urutan'] ?? $submenu->urutan;
        $submenu->isi            = $validated['isi'];
        $submenu->is_active      = $request->has('is_active') ? 1 : 0;

        // Jika ada foto baru
        if ($request->hasFile('foto')) {

            // Hapus foto lama
            if ($submenu->foto && Storage::exists('public/' . $submenu->foto)) {
                Storage::delete('public/' . $submenu->foto);
            }

            $path = $request->file('foto')->store('diklat', 'public');
            $submenu->foto = $path;
        }

        $submenu->save();

        return redirect()->route('admin.diklat-submenu.index')
                         ->with('success', 'Submenu berhasil diupdate');
    }

    public function show($id)
    {
        $submenu = SubmenuDiklat::findOrFail($id);

        return view('admin.diklat.submenu.show', compact('submenu'));
    }

    public function destroy($id)
    {
        $submenu = SubmenuDiklat::findOrFail($id);

        // Hapus foto jika ada
        if ($submenu->foto && Storage::exists('public/' . $submenu->foto)) {
            Storage::delete('public/' . $submenu->foto);
        }

        $submenu->delete();

        return redirect()->route('admin.diklat-submenu.index')
                         ->with('success', 'Submenu berhasil dihapus');
    }

    //     public function landing()
    // {
    // $goldara = SubmenuDiklat::where('slug', 'goldara')->first();

    // return view('diklat', compact('goldara'));
    // }
}
