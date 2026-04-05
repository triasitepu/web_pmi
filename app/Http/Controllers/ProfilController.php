<?php

namespace App\Http\Controllers;

    use App\Models\Profil;
    use App\Models\SubmenuProfil;
    use Illuminate\Http\Request;
    use Illuminate\Support\Str;

    class ProfilController extends Controller
    {
        public function index()
        {
            $profilSubmenus = SubmenuProfil::with('profil')
                                ->orderBy('urutan', 'asc')
                                ->get();
            return view('admin.profil.menu', compact('profilSubmenus'));
        }

        public function create()
        {
            return view('admin.profil.create');
        }

        public function store(Request $request)
        {
            $validated = $request->validate([
                'nama_menu' => 'required|string|max:255',
                'url'       => 'required|string|max:255',
                'kategori'  => 'nullable|string|max:255',
            ]);

            Profil::create([
                'nama_menu' => $validated['nama_menu'],
                'slug'      => Str::slug($validated['nama_menu']),
                'url'       => $validated['url'],
                'kategori'  => $validated['kategori'],
            ]);

            return redirect()->route('admin.profil.index')
                ->with('success', 'Menu Profil berhasil ditambahkan');
        }

        public function edit($id)
        {
            $profil = Profil::findOrFail($id);
            return view('admin.profil.edit', compact('profil'));
        }

        public function update(Request $request, $id)
        {
            $profil = Profil::findOrFail($id);

            $validated = $request->validate([
                'nama_menu' => 'required|string|max:255',
                'url'       => 'required|string|max:255',
                'kategori'  => 'nullable|string|max:255',
            ]);

            $profil->update([
                'nama_menu' => $validated['nama_menu'],
                'slug'      => Str::slug($validated['nama_menu']),
                'url'       => $validated['url'],
                'kategori'  => $validated['kategori'],
            ]);

            return redirect()->route('admin.profil.index')
                ->with('success', 'Menu Profil berhasil diupdate');
        }

        public function destroy($id)
        {
            $profil = Profil::findOrFail($id);
            $profil->delete();

            return redirect()->route('admin.profil.index')
                ->with('success', 'Menu Profil berhasil dihapus');
        }
    }
