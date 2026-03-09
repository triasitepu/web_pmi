<?php

namespace App\Http\Controllers;


use App\Models\Menu;
use App\Models\Submenu;
use Illuminate\Http\Request;

class ProfilPmiController extends Controller
{
    /**
     * Tampilkan menu Profil PMI
     */
public function index()
{
    $menu = Menu::where('kategori', 'profil-pmi')->first();

    $submenus = $menu ? $menu->submenus : collect();

    return view('admin.menu', compact('menu', 'submenus'));
}

    /**
     * Form edit menu
     */
    public function edit($id_menu)
    {
        $menu = Menu::where('id', $id_menu)
                    ->where('kategori', 'profil-pmi')
                    ->firstOrFail();

        return view('admin.profil-pmi.edit', compact('menu'));
    }

    /**
     * Update menu
     */
    public function update(Request $request, $id_menu)
    {
        $menu = Menu::where('id', $id_menu)
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
    $menu = \App\Models\Menu::where('kategori', 'profil-pmi')->firstOrFail();

    $submenus = \App\Models\Submenu::where('id', $menu->id)->get();

    return view('about', compact('menu', 'submenus'));
}

}
