<?php

namespace App\Http\Controllers;

    use App\Models\Kebencanaan;
    use App\Models\SubmenuKebencanaan;
    use Illuminate\Http\Request;
    use Illuminate\Support\Str;

    class KebencanaanController extends Controller
    {
        public function index()
        {
            $kebencanaanSubmenus = SubmenuKebencanaan::with('kebencanaan')
                                ->orderBy('urutan', 'asc')
                                ->get();
            return view('admin.kebencanaan.menu', compact('kebencanaanSubmenus'));
        }

        public function create()
        {
            return view('admin.kebencanaan.create');
        }

        public function store(Request $request)
        {
            $validated = $request->validate([
                'nama_menu' => 'required|string|max:255',
                'url'       => 'required|string|max:255',
                'kategori'  => 'nullable|string|max:255',
            ]);

            Kebencanaan::create([
                'nama_menu' => $validated['nama_menu'],
                'slug'      => Str::slug($validated['nama_menu']),
                'url'       => $validated['url'],
                'kategori'  => $validated['kategori'],
            ]);

            return redirect()->route('admin.kebencanaan.index')
                ->with('success', 'Menu Kebencanaan berhasil ditambahkan');
        }

        public function edit($id)
        {
            $kebencanaan = Kebencanaan::findOrFail($id);
            return view('admin.kebencanaan.edit', compact('kebencanaan'));
        }

        public function update(Request $request, $id)
        {
            $kebencanaan = Kebencanaan::findOrFail($id);

            $validated = $request->validate([
                'nama_menu' => 'required|string|max:255',
                'url'       => 'required|string|max:255',
                'kategori'  => 'nullable|string|max:255',
            ]);

            $kebencanaan->update([
                'nama_menu' => $validated['nama_menu'],
                'slug'      => Str::slug($validated['nama_menu']),
                'url'       => $validated['url'],
                'kategori'  => $validated['kategori'],
            ]);

            return redirect()->route('admin.kebencanaan.index')
                ->with('success', 'Menu Kebencanaan berhasil diupdate');
        }

        public function destroy($id)
        {
            $kebencanaan = Kebencanaan::findOrFail($id);
            $kebencanaan->delete();

            return redirect()->route('admin.kebencanaan.index')
                ->with('success', 'Menu Kebencanaan berhasil dihapus');
        }
    }
