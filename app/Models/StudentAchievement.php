<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentAchievement extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'link',
        'date',
        'sort_order'
    ];

    protected $casts = [
        'date' => 'date',
        'sort_order' => 'integer'
    ];
}
