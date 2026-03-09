<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 


class Konten extends Model
{
    protected $fillable = [
        'menu_id',
        'judul',
        'isi'
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
