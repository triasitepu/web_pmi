<?php

namespace App\Http\Controllers;

use App\Models\SubmenuKebencanaan;
use App\Models\Kebencanaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SubmenuKebencanaanController extends Controller
{
    public function index()
    {
        $submenus = SubmenuKebencanaan::with('kebencanaan')
                    ->orderBy('urutan', 'asc')
                    ->get();

        return view('admin.kebencanaan.submenu.index', compact('submenus'));
    }

    public function create()
    {
        $kebencanaan = Kebencanaan::all();
        return view('admin.kebencanaan.submenu.tambah', compact('kebencanaan'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kebencanaan_id' => 'required|exists:kebencanaan,id',
            'nama_submenu'   => 'required|string|max:255',
            'isi'            => 'required',
            'foto'           => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'urutan'         => 'nullable|integer|min:0'
        ]);

        $submenu = new SubmenuKebencanaan();
        $submenu->kebencanaan_id = $validated['kebencanaan_id'];
        $submenu->nama_submenu = $validated['nama_submenu'];
        $submenu->slug         = Str::slug($validated['nama_submenu']);
        $submenu->isi          = $validated['isi'];
        $submenu->urutan       = $validated['urutan'] ?? 0;
        $submenu->is_active    = 1;

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('kebencanaan', 'public');
            $submenu->foto = $path;
        }

        $submenu->save();

        return redirect()->route('admin.kebencanaan-submenu.index')
            ->with('success', 'Submenu Kebencanaan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $submenu = SubmenuKebencanaan::findOrFail($id);
        $kebencanaan = Kebencanaan::all();

        return view('admin.kebencanaan.submenu.edit', compact('submenu', 'kebencanaan'));
    }

    public function update(Request $request, $id)
    {
        $submenu = SubmenuKebencanaan::findOrFail($id);

        $validated = $request->validate([
            'kebencanaan_id' => 'required|exists:kebencanaan,id',
            'nama_submenu' => 'required|string|max:255',
            'isi'          => 'required',
            'foto'         => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'urutan'       => 'nullable|integer|min:0',
            'is_active'    => 'nullable|boolean'
        ]);

        $submenu->kebencanaan_id = $validated['kebencanaan_id'];
        $submenu->nama_submenu = $validated['nama_submenu'];
        $submenu->slug         = Str::slug($validated['nama_submenu']);
        $submenu->isi          = $validated['isi'];
        $submenu->urutan       = $validated['urutan'] ?? $submenu->urutan;
        $submenu->is_active    = $request->has('is_active') ? 1 : 0;

        if ($request->hasFile('foto')) {

            if ($submenu->foto && Storage::exists('public/' . $submenu->foto)) {
                Storage::delete('public/' . $submenu->foto);
            }

            $path = $request->file('foto')->store('relawan', 'public');
            $submenu->foto = $path;
        }

        $submenu->save();

        return redirect()->route('admin.kebencanaan-submenu.index')
            ->with('success', 'Submenu Kebencanaan berhasil diupdate');
    }

    public function show($id)
    {
        $submenu = SubmenuKebencanaan::findOrFail($id);

        return view('admin.kebencanaan.submenu.show', compact('submenu'));
    }

    public function destroy($id)
    {
        $submenu = SubmenuKebencanaan::findOrFail($id);

        if ($submenu->foto && Storage::exists('public/' . $submenu->foto)) {
            Storage::delete('public/' . $submenu->foto);
        }

        $submenu->delete();

        return redirect()->route('admin.kebencanaan-submenu.index')
            ->with('success', 'Submenu Kebencanaan berhasil dihapus');
    }

    public function landing()
    {
    $layout1 = SubmenuKebencanaan::where('slug', 'layout1')->first();
    

    return view('bencana', compact('layout1'));
    }
}
