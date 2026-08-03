<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Musteri extends Model
{
    protected $fillable = [
        'ad',
        'soyad',
        'email',
        'telefon',
        'sirket',
        'durum',
    ];

    public function teklifler()
    {
        return $this->hasMany(\App\Models\Teklif::class);
    }
}
