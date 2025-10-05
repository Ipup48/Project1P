<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $table = 'alumni';

    protected $fillable = [
        'name',
        'graduation_year',
        'position',
        'bio',
        'image',
        'email',
        'linkedin',
        'company',
        'sort_order'
    ];

    protected $casts = [
        'sort_order' => 'integer'
    ];
}
