<?php

namespace App\Http\Controllers; 

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function store(Request $request)
    {
        Pengaduan::create([
            'nama' => $request->nama ?? 'Guest',
            'no_hp' => $request->no_hp ?? '-',
            'kategori' => $request->kategori,
            'isi' => $request->isi,
        ]);

        return response()->json([
            'message' => 'Pengaduan berhasil dikirim!'
        ]);
    }
}