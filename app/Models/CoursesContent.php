<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoursesContent extends Model
{
    protected $table = 'courses_content';

    protected $fillable = [
        'title',
        'content',
        'section',
        'subtitle',
        'list_items',
        'year',
        'sort_order'
    ];

    protected $casts = [
        'list_items' => 'array'
    ];
}