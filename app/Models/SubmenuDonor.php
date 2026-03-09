<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubmenuDonor extends Model
{
    protected $table = 'submenu_donor';  // nama tabel asli dari phpMyAdmin kamu

    protected $fillable = [
        'donor_darah_id',
        'nama_submenu',
        'slug',
        'urutan',
        'is_active',
        'judul',
        'isi',
        'foto',
    ];

    public function donor()
    {
        return $this->belongsTo(DonorDarah::class, 'donor_darah_id', 'id');
    }
}