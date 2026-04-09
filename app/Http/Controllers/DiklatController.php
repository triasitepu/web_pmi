<?php

namespace App\Http\Controllers;

    use App\Models\Diklat;
    use App\Models\SubmenuDiklat;
    use Illuminate\Http\Request;
    use Illuminate\Support\Str;

    class DiklatController extends Controller
    {
        public function index()
        {
            $diklatSubmenus = SubmenuDiklat::with('diklat')
                                ->orderBy('urutan', 'asc')
                                ->get();
            return view('admin.diklat.menu', compact('diklatSubmenus'));
        }

        public function create()
        {
            return view('admin.diklat.create');
        }

        public function store(Request $request)
        {
            $validated = $request->validate([
                'nama_menu' => 'required|string|max:255',
                'url'       => 'required|string|max:255',
                'kategori'  => 'nullable|string|max:255',
            ]);

            Diklat::create([
                'nama_menu' => $validated['nama_menu'],
                'slug'      => Str::slug($validated['nama_menu']),
                'url'       => $validated['url'],
                'kategori'  => $validated['kategori'],
            ]);

            return redirect()->route('admin.diklat.index')
                ->with('success', 'Menu Diklat berhasil ditambahkan');
        }

        public function edit($id)
        {
            $diklat = Diklat::findOrFail($id);
            return view('admin.diklat.edit', compact('diklat'));
        }

        public function update(Request $request, $id)
        {
            $diklat = Diklat::findOrFail($id);

            $validated = $request->validate([
                'nama_menu' => 'required|string|max:255',
                'url'       => 'required|string|max:255',
                'kategori'  => 'nullable|string|max:255',
            ]);

            $diklat->update([
                'nama_menu' => $validated['nama_menu'],
                'slug'      => Str::slug($validated['nama_menu']),
                'url'       => $validated['url'],
                'kategori'  => $validated['kategori'],
            ]);

            return redirect()->route('admin.diklat.index')
                ->with('success', 'Menu Diklat berhasil diupdate');
        }

        public function destroy($id)
        {
            $diklat = Diklat::findOrFail($id);
            $diklat->delete();

            return redirect()->route('admin.diklat.index')
                ->with('success', 'Menu Diklat berhasil dihapus');
        }
    }
