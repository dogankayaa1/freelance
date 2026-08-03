<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'proje_id',
        'name',
        'status',
        'tag',
        'description',
        'due_date',
        'time_spent'
    ];

    public function proje()
    {
        return $this->belongsTo(proje::class, 'proje_id');
    }
}
