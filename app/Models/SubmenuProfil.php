<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class SubmenuProfil extends Model
{
    protected $table = 'submenu_profil';

    protected $fillable = [
        'profil_id',
        'nama_submenu',
        'slug',
        'isi',
        'foto',
        'urutan',
        'is_active',
    ];

    public function profil()
    {
        return $this->belongsTo(Profil::class, 'profil_id');
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
