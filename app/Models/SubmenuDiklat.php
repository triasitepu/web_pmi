<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class SubmenuDiklat extends Model
{
    protected $table = 'submenu_diklat';

    protected $fillable = [
        'diklat_id',
        'nama_submenu',
        'slug',
        'isi',
        'foto',
        'urutan',
        'is_active',
    ];

    public function diklat()
    {
        return $this->belongsTo(Diklat::class, 'diklat_id');
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
