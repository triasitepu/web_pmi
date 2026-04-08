<?php

namespace App\Http\Controllers;

use App\Models\SubmenuDonor;
use App\Models\DonorDarah;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SubmenuDonorController extends Controller
{
    public function index()
    {
        $submenus = SubmenuDonor::with('donor')
                    ->orderBy('urutan', 'asc')
                    ->get();

        return view('admin.donor.menu', compact('submenus'));
    }

    public function create()
    {
        $donorMenus = DonorDarah::all();
        return view('admin.donor.submenu.tambah', compact('donorMenus'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'donor_darah_id' => 'required|exists:donor_darah,id',
            'nama_submenu'   => 'required|string|max:255',
            'urutan'         => 'nullable|integer|min:0',
            'isi'            => 'required',
            'foto'           => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $submenu = new SubmenuDonor();
        $submenu->donor_darah_id = $validated['donor_darah_id'];
        $submenu->nama_submenu   = $validated['nama_submenu'];
        $submenu->slug           = Str::slug($validated['nama_submenu']);
        $submenu->urutan         = $validated['urutan'] ?? 0;
        $submenu->isi            = $validated['isi'];
        $submenu->is_active      = 1;

        // Upload Foto
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('donor', 'public');
            $submenu->foto = $path;
        }

        $submenu->save();

        return redirect()->route('admin.donor-submenu.index')
                         ->with('success', 'Submenu berhasil ditambahkan');
    }

    public function edit($id)
    {
        $submenu = SubmenuDonor::findOrFail($id);
        $donorMenus = DonorDarah::all();

        return view('admin.donor.submenu.edit', compact('submenu', 'donorMenus'));
    }

    public function update(Request $request, $id)
    {
        $submenu = SubmenuDonor::findOrFail($id);

        $validated = $request->validate([
            'donor_darah_id' => 'required|exists:donor_darah,id',
            'nama_submenu'   => 'required|string|max:255',
            'urutan'         => 'nullable|integer|min:0',
            'isi'            => 'required',
            'is_active'      => 'nullable|boolean',
            'foto'           => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $submenu->donor_darah_id = $validated['donor_darah_id'];
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

            $path = $request->file('foto')->store('donor', 'public');
            $submenu->foto = $path;
        }

        $submenu->save();

        return redirect()->route('admin.donor-submenu.index')
                         ->with('success', 'Submenu berhasil diupdate');
    }

    public function show($id)
    {
        $submenu = SubmenuDonor::findOrFail($id);

        return view('admin.donor.submenu.show', compact('submenu'));
    }

    public function destroy($id)
    {
        $submenu = SubmenuDonor::findOrFail($id);

        // Hapus foto jika ada
        if ($submenu->foto && Storage::exists('public/' . $submenu->foto)) {
            Storage::delete('public/' . $submenu->foto);
        }

        $submenu->delete();

        return redirect()->route('admin.donor-submenu.index')
                         ->with('success', 'Submenu berhasil dihapus');
    }

        public function landing()
    {
    $goldara = SubmenuDonor::where('slug', 'goldara')->first();

    return view('donor', compact('goldara'));
    }
}
