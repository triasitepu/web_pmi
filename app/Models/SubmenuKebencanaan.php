<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class SubmenuKebencanaan extends Model
{
    protected $table = 'submenu_kebencanaan';

    protected $fillable = [
        'kebencanaan_id',
        'nama_submenu',
        'slug',
        'isi',
        'foto',
        'urutan',
        'is_active',
    ];

    public function kebencanaan()
    {
        return $this->belongsTo(Kebencanaan::class, 'kebencanaan_id');
    }

    protected static function booted()
    {
        static::saving(function ($submenu) {
            if (empty($submenu->slug) && !empty($submenu->nama_submenu)) {
                $submenu->slug = Str::slug($submenu->nama_submenu);
            }
        });
    }
}
