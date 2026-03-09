<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class SubmenuRelawan extends Model
{
    protected $table = 'submenu_relawan';

    protected $fillable = [
        'relawan_id',
        'nama_submenu',
        'slug',
        'isi',
        'foto',
        'urutan',
        'is_active',
    ];

    public function relawan()
    {
        return $this->belongsTo(Relawan::class, 'relawan_id');
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
