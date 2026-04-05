<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Profil extends Model
{
    protected $table = 'profil';

    protected $fillable = [
        'nama_menu',
        'slug',
        'kategori',
        'url',
    ];

    public function submenus(): HasMany
    {
        return $this->hasMany(SubmenuProfil::class, 'id_menu', 'id');
    }

    protected static function booted()
    {
        static::deleting(function ($profil) {
            $profil->submenus()->delete();
        });

        static::saving(function ($profil) {
            if (empty($profil->slug) && !empty($profil->nama_menu)) {
                $profil->slug = Str::slug($profil->nama_menu);
            }
        });
    }

    public function scopeProfil($query)
    {
        return $query->where('kategori', 'profil');
    }
}
