<?php

namespace App\Http\Controllers;

use App\Models\SubmenuRelawan;
use App\Models\Relawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SubmenuRelawanController extends Controller
{
    public function index()
    {
        $submenus = SubmenuRelawan::with('relawan')
                    ->orderBy('urutan', 'asc')
                    ->paginate(5);

        return view('admin.relawan.submenu.index', compact('submenus'));
    }

    public function create()
    {
        $relawans = Relawan::all();
        return view('admin.relawan.submenu.tambah', compact('relawans'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'relawan_id'   => 'required|exists:relawan,id',
            'nama_submenu' => 'required|string|max:255',
            'isi'          => 'required',
            'foto'         => 'nullable|mimes:jpg,jpeg,png,pdf|max:5120 ',
            'urutan'       => 'nullable|integer|min:0'
        ]);

        $submenu = new SubmenuRelawan();
        $submenu->relawan_id   = $validated['relawan_id'];
        $submenu->nama_submenu = $validated['nama_submenu'];
        $submenu->slug         = Str::slug($validated['nama_submenu']);
        $submenu->isi          = $validated['isi'];
        $submenu->urutan       = $validated['urutan'] ?? 0;
        $submenu->is_active    = 1;

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('relawan', 'public');
            $submenu->foto = $path;
        }

        $submenu->save();

        return redirect()->route('admin.relawan-submenu.index')
            ->with('success', 'Submenu Relawan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $submenu = SubmenuRelawan::findOrFail($id);
        $relawans = Relawan::all();

        return view('admin.relawan.submenu.edit', compact('submenu', 'relawans'));
    }

    public function update(Request $request, $id)
    {
        $submenu = SubmenuRelawan::findOrFail($id);

        $validated = $request->validate([
            'relawan_id'   => 'required|exists:relawan,id',
            'nama_submenu' => 'required|string|max:255',
            'isi'          => 'required',
            'foto'         => 'nullable|mimes:jpg,jpeg,png,pdf|max:5120 ',
            'urutan'       => 'nullable|integer|min:0',
            'is_active'    => 'nullable|boolean'
        ]);

        $submenu->relawan_id   = $validated['relawan_id'];
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

        return redirect()->route('admin.relawan-submenu.index')
            ->with('success', 'Submenu Relawan berhasil diupdate');
    }

    public function show($id)
    {
        $submenu = SubmenuRelawan::findOrFail($id);

        return view('admin.relawan.submenu.show', compact('submenu'));
    }

    public function destroy($id)
    {
        $submenu = SubmenuRelawan::findOrFail($id);

        if ($submenu->foto && Storage::exists('public/' . $submenu->foto)) {
            Storage::delete('public/' . $submenu->foto);
        }

        $submenu->delete();

        return redirect()->route('admin.relawan-submenu.index')
            ->with('success', 'Submenu Relawan berhasil dihapus');
    }
    public function landing()
    {
    $totalrelawan = SubmenuRelawan::where('slug', 'totalrelawan')->first();
    $misi = SubmenuRelawan::where('slug', 'misi')->first();
    $formulir = SubmenuRelawan::where('slug', 'formulir')->first();
    $persyaratan = SubmenuRelawan::where('slug', 'persyaratan')->first();
    $syaratpmr = SubmenuRelawan::where('slug', 'syaratpmr')->first();
    $syaratksr = SubmenuRelawan::where('slug', 'syaratksr')->first();
    $syarattsr = SubmenuRelawan::where('slug', 'syarattsr')->first();
    $headline = SubmenuRelawan::where('slug', 'headline')->first();

    return view('relawan', compact('totalrelawan', 'misi', 'formulir', 'persyaratan', 'syaratpmr', 'syaratksr', 'syarattsr', 'headline'));
    }
}
