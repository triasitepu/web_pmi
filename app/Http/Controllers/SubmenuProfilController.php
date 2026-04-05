<?php

namespace App\Http\Controllers;

use App\Models\SubmenuProfil;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SubmenuProfilController extends Controller
{
    public function index()
    {
        $submenus = SubmenuProfil::with('profil')
                    ->orderBy('urutan', 'asc')
                    ->get();

        return view('admin.profil.submenu.index', compact('submenus'));
    }

    public function create()
    {
        $profils = Profil::all();
        return view('admin.profil.submenu.tambah', compact('profils'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'profil_id'    => 'required|exists:profil,id',
            'nama_submenu' => 'required|string|max:255',
            'isi'          => 'required',
            'foto'         => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'urutan'       => 'nullable|integer|min:0'
        ]);

        $submenu = new SubmenuProfil();
        $submenu->profil_id    = $validated['profil_id'];
        $submenu->nama_submenu = $validated['nama_submenu'];
        $submenu->slug         = Str::slug($validated['nama_submenu']);
        $submenu->isi          = $validated['isi'];
        $submenu->urutan       = $validated['urutan'] ?? 0;
        $submenu->is_active    = 1;

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('profil', 'public');
            $submenu->foto = $path;
        }

        $submenu->save();

        return redirect()->route('admin.profil-submenu.index')
            ->with('success', 'Submenu Profil berhasil ditambahkan');
    }

    public function edit($id)
    {
        $submenu = SubmenuProfil::findOrFail($id);
        $profils = Profil::all();

        return view('admin.profil.submenu.edit', compact('submenu', 'profils'));
    }

    public function update(Request $request, $id)
    {
        $submenu = SubmenuProfil::findOrFail($id);

        $validated = $request->validate([
            'profil_id'    => 'required|exists:profil,id',
            'nama_submenu' => 'required|string|max:255',
            'isi'          => 'required',
            'foto'         => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'urutan'       => 'nullable|integer|min:0',
            'is_active'    => 'nullable|boolean'
        ]);

        $submenu->profil_id    = $validated['profil_id'];
        $submenu->nama_submenu = $validated['nama_submenu'];
        $submenu->slug         = Str::slug($validated['nama_submenu']);
        $submenu->isi          = $validated['isi'];
        $submenu->urutan       = $validated['urutan'] ?? $submenu->urutan;
        $submenu->is_active    = $request->has('is_active') ? 1 : 0;

        if ($request->hasFile('foto')) {

            if ($submenu->foto && Storage::exists('public/' . $submenu->foto)) {
                Storage::delete('public/' . $submenu->foto);
            }

            $path = $request->file('foto')->store('profil', 'public');
            $submenu->foto = $path;
        }

        $submenu->save();

        return redirect()->route('admin.profil-submenu.index')
            ->with('success', 'Submenu Profil berhasil diupdate');
    }

    public function show($id)
    {
        $submenu = SubmenuProfil::findOrFail($id);

        return view('admin.profil.submenu.show', compact('submenu'));
    }

    public function destroy($id)
    {
        $submenu = SubmenuProfil::findOrFail($id);

        if ($submenu->foto && Storage::exists('public/' . $submenu->foto)) {
            Storage::delete('public/' . $submenu->foto);
        }

        $submenu->delete();

        return redirect()->route('admin.profil-submenu.index')
            ->with('success', 'Submenu Profil berhasil dihapus');
    }
}
