<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Diklat extends Model
{
    protected $table = 'diklat';

    protected $fillable = [
        'nama_menu',
        'slug',
        'kategori',
        'url',
    ];

    public function submenus(): HasMany
    {
        return $this->hasMany(SubmenuDiklat::class, 'diklat_id', 'id');
    }

    protected static function booted()
    {
        static::deleting(function ($diklat) {
            $diklat->submenus()->delete();
        });

        static::saving(function ($diklat) {
            if (empty($diklat->slug) && !empty($diklat->nama_menu)) {
                $diklat->slug = Str::slug($diklat->nama_menu);
            }
        });
    }

    public function scopeDiklat($query)
    {
        return $query->where('kategori', 'diklat');
    }
}
