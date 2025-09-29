<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsEvent extends Model
{
    protected $fillable = [
        'title',
        'description',
        'date',
        'type',
        'image'
    ];

    protected $casts = [
        'date' => 'date'
    ];
}