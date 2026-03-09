<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function ambulans()
    {
        // Memanggil view resources/views/layanan/ambulans.blade.php
        return view('layanan.ambulans');
    }
}
