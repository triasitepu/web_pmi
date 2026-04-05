<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Kebencanaan extends Model
{
    protected $table = 'kebencanaan';

    protected $fillable = [
        'nama_menu',
        'slug',
        'kategori',
        'url',
    ];

    public function submenus(): HasMany
    {
        return $this->hasMany(SubmenuRelawan::class, 'kebencanaan_id', 'id');
    }

    protected static function booted()
    {
        static::deleting(function ($kebencanaan) {
            $kebencanaan->submenus()->delete();
        });

        static::saving(function ($kebencanaan) {
            if (empty($kebencanaan->slug) && !empty($kebencanaan->nama_menu)) {
                $kebencanaan->slug = Str::slug($kebencanaan->nama_menu);
            }
        });
    }

    public function scopeRelawan($query)
    {
        return $query->where('kategori', 'kebencanaan');
    }
}
