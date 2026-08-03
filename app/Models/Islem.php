<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Islem extends Model
{
    protected $fillable = [
        'tip',
        'baslik',
        'tutar',
        'kategori',
        'tarih',
        'aciklama',
    ];
}
