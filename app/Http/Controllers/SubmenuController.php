<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Submenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubmenuController extends Controller
{
    // List semua submenu berdasarkan menu
    public function index($id_menu)
    {
        $menu = Menu::findOrFail($id_menu); // ambil menu apa saja
        $submenus = $menu->submenus()->get();

        return view('admin.tambah_menu', compact('menu', 'submenus'));
    }

    // Form tambah submenu
    public function create($id_menu)
    {
        $menu = Menu::findOrFail($id_menu);
        return view('admin.tambah_menu', compact('menu'));
    }

    // Simpan submenu baru
    public function store(Request $request, $id_menu)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:150',
            'isi'   => 'nullable|string',
            'foto'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $menu = Menu::findOrFail($id_menu);

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store($menu->kategori, 'public');
        }

        Submenu::create([
            'judul'       => $validated['judul'],
            'isi'         => $validated['isi'] ?? null,
            'foto'        => $fotoPath,
            'id_menu'     => $id_menu,
            'id_pengguna' => Auth::check() ? Auth::user()->id_pengguna : null,
        ]);

        return redirect()
            ->route('admin.submenu.index', $id_menu)
            ->with('success', 'Konten baru berhasil ditambahkan');
    }

    // Edit submenu
    public function edit($id_menu, $id_submenu)
    {
        $menu = Menu::findOrFail($id_menu);
        $submenu = Submenu::where('id_submenu', $id_submenu)
                          ->where('id_menu', $id_menu)
                          ->firstOrFail();

        return view('admin.editsubmenu', compact('menu', 'submenu'));
    }

    // Update submenu
    public function update(Request $request, $id_menu, $id_submenu)
    {
        $menu = Menu::findOrFail($id_menu);
        $submenu = Submenu::where('id_submenu', $id_submenu)
                          ->where('id_menu', $id_menu)
                          ->firstOrFail();

        $validated = $request->validate([
            'judul' => 'required|string|max:150',
            'isi'   => 'nullable|string',
            'foto'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            
        ]);

        $fotoPath = $submenu->foto; // default foto path
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store($menu->kategori, 'public');
        }

        $submenu->update([
            'judul' => $validated['judul'],
            'isi'   => $validated['isi'] ?? $submenu->isi,
            'foto'  => $fotoPath,
            'is_active' => $request->has('is_active') ? 1 : 0,
        ]);

        return redirect()
            ->route('admin.submenu.index', $id_menu)
            ->with('success', 'Konten berhasil diperbarui');
    }

    // Hapus submenu
    public function destroy($id_menu, $id_submenu)
    {
        $menu = Menu::findOrFail($id_menu);
        $submenu = Submenu::where('id_submenu', $id_submenu)
                          ->where('id_menu', $id_menu)
                          ->firstOrFail();

        $submenu->delete();

        return redirect()
            ->route('admin.submenu.index', $id_menu)
            ->with('success', 'Konten berhasil dihapus');
    }

    // Show submenu
    public function show($id_menu, $id_submenu)
    {
        $menu = Menu::findOrFail($id_menu);
        $submenu = Submenu::where('id_submenu', $id_submenu)
                          ->where('id_menu', $id_menu)
                          ->firstOrFail();

        return view('admin.showsubmenu', compact('menu', 'submenu'));
    }
}
