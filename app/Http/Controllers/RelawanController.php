<?php

namespace App\Http\Controllers;

    use App\Models\Relawan;
    use App\Models\SubmenuRelawan;
    use Illuminate\Http\Request;
    use Illuminate\Support\Str;

    class RelawanController extends Controller
    {
        public function index()
        {
            $relawanSubmenus = SubmenuRelawan::with('relawan')
                                ->orderBy('urutan', 'asc')
                                ->get();
            return view('admin.relawan.menu', compact('relawanSubmenus'));
        }

        public function create()
        {
            return view('admin.relawan.create');
        }

        public function store(Request $request)
        {
            $validated = $request->validate([
                'nama_menu' => 'required|string|max:255',
                'url'       => 'required|string|max:255',
                'kategori'  => 'nullable|string|max:255',
            ]);

            Relawan::create([
                'nama_menu' => $validated['nama_menu'],
                'slug'      => Str::slug($validated['nama_menu']),
                'url'       => $validated['url'],
                'kategori'  => $validated['kategori'],
            ]);

            return redirect()->route('admin.relawan.index')
                ->with('success', 'Menu Relawan berhasil ditambahkan');
        }

        public function edit($id)
        {
            $relawan = Relawan::findOrFail($id);
            return view('admin.relawan.edit', compact('relawan'));
        }

        public function update(Request $request, $id)
        {
            $relawan = Relawan::findOrFail($id);

            $validated = $request->validate([
                'nama_menu' => 'required|string|max:255',
                'url'       => 'required|string|max:255',
                'kategori'  => 'nullable|string|max:255',
            ]);

            $relawan->update([
                'nama_menu' => $validated['nama_menu'],
                'slug'      => Str::slug($validated['nama_menu']),
                'url'       => $validated['url'],
                'kategori'  => $validated['kategori'],
            ]);

            return redirect()->route('admin.relawan.index')
                ->with('success', 'Menu Relawan berhasil diupdate');
        }

        public function destroy($id)
        {
            $relawan = Relawan::findOrFail($id);
            $relawan->delete();

            return redirect()->route('admin.relawan.index')
                ->with('success', 'Menu Relawan berhasil dihapus');
        }
    }
