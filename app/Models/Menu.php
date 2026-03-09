<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Menu extends Model
{
    protected $table = 'menu';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'nama_menu',
        'slug',
        'kategori',
        'url',
    ];

    public function submenus(): HasMany
    {
        return $this->hasMany(Submenu::class, 'id_menu', 'id');
    }

    protected static function booted()
    {
        static::deleting(function ($menu) {
            $menu->submenus()->delete();
        });

        // Auto slug
        static::saving(function ($menu) {
            if (empty($menu->slug) && !empty($menu->nama_menu)) {
                $menu->slug = \Illuminate\Support\Str::slug($menu->nama_menu);
            }
        });
    }

    public function scopeProfilPmi($query)
    {
        return $query->where('kategori', 'profil-pmi');
    }

    public function getRouteKeyName()
{
    return 'id';
}
}
