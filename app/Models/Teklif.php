<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teklif extends Model
{
    protected $fillable = [
        'musteri_id',
        'teklif_no',
        'hizmet_turu',
        'tutar',
        'tarih',
        'aciklama',
        'durum',
    ];

    public function musteri()
    {
        return $this->belongsTo(\App\Models\Musteri::class);
    }
}
