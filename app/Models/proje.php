<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class proje extends Model
{
    protected $fillable = [
        'proje_adi',
        'musteri',
        'durum',
        'aciklama',
        'baslangic',
        'bitis',
        'butce',
        'oncelik'



    ];
}
