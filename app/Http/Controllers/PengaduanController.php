<?php

namespace App\Http\Controllers; 

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
   public function store(Request $request)
    {
        $request->validate([
            'email' => 'nullable|email',
            'kategori' => 'required',
            'isi' => 'required',
        ]);

        Pengaduan::create([
            'nama' => $request->nama ?: 'Guest',
            'email' => $request->email ?: '-',
            'kategori' => $request->kategori,
            'isi' => $request->isi,
        ]);

        return response()->json([
            'message' => 'Pengaduan berhasil dikirim!'
        ]);
    }

}