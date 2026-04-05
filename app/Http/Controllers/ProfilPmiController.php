<?php

namespace App\Http\Controllers;


use App\Models\Profil;
use App\Models\SubmenuProfil;
use Illuminate\Http\Request;

class ProfilPmiController extends Controller
{
    /**
     * Tampilkan menu Profil PMI
     */
public function index()
{
    $profil = Profil::where('kategori', 'profil-pmi')->first();

    $submenus = $profil ? $profil->submenus : collect();

    return view('admin.menu', compact('profil', 'submenus'));
}

    /**
     * Form edit menu
     */
    public function edit($id_menu)
    {
        $menu = Profil::where('id', $id_menu)
                    ->where('kategori', 'profil-pmi')
                    ->firstOrFail();

        return view('admin.profil-pmi.edit', compact('menu'));
    }

    /**
     * Update menu
     */
    public function update(Request $request, $id_menu)
    {
        $menu = Profil::where('id', $id_menu)
                    ->where('kategori', 'profil-pmi')
                    ->firstOrFail();

        $validated = $request->validate([
            'nama_menu' => 'required|string|max:100',
            'slug'      => 'nullable|string|max:100|unique:menu,slug,' . $id_menu . ',id_menu',
        ]);

        $menu->update($validated);

        return redirect()
            ->route('admin.profil-pmi.index')
            ->with('success', 'Menu berhasil diperbarui');
    }
    public function show()
{
    $profil = \App\Models\Profil::where('kategori', 'profil-pmi')->firstOrFail();

    $submenus = \App\Models\SubmenuProfil::where('id_menu', $profil->id)->get();

    return view('about', compact('profil', 'submenus'));
}

}
