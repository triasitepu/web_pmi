<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Relawan extends Model
{
    protected $table = 'relawan';

    protected $fillable = [
        'nama_menu',
        'slug',
        'kategori',
        'url',
    ];

    public function submenus(): HasMany
    {
        return $this->hasMany(SubmenuRelawan::class, 'relawan_id', 'id');
    }

    protected static function booted()
    {
        static::deleting(function ($relawan) {
            $relawan->submenus()->delete();
        });

        static::saving(function ($relawan) {
            if (empty($relawan->slug) && !empty($relawan->nama_menu)) {
                $relawan->slug = Str::slug($relawan->nama_menu);
            }
        });
    }

    public function scopeRelawan($query)
    {
        return $query->where('kategori', 'relawan');
    }
}
