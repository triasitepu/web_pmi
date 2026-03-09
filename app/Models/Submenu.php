<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Submenu extends Model
{
    protected $table = 'submenu';
    protected $primaryKey = 'id_submenu';
    public $timestamps = false;

    protected $fillable = [
        'judul',
        'isi',
        'foto',
        'id_menu',
        'id_pengguna',
    ];

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class, 'id_menu', 'id');
    }

    // Optional: relasi ke pengguna
    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Pengguna::class, 'id_pengguna', 'id_pengguna');
        // Ganti nama model & key sesuai struktur tabel pengguna kamu
    }
}