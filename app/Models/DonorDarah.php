<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class DonorDarah extends Model
{
    protected $table = 'donor_darah';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_menu',
        'slug',
        'kategori',
        'url',
    ];

    public function submenus(): HasMany
    {
        return $this->hasMany(SubmenuDonor::class, 'donor_darah_id', 'id');
    }

    protected static function booted()
    {
        static::deleting(function ($donor) {
            $donor->submenus()->delete();
        });

        static::saving(function ($donor) {
            if (empty($donor->slug) && !empty($donor->nama_menu)) {
                $donor->slug = Str::slug($donor->nama_menu);
            }
        });
    }

    public function scopeDonor($query)
    {
        return $query->where('kategori', 'donor-darah');
    }

    public function getRouteKeyName()
    {
        return 'id';
    }
}
