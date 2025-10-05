<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutContent extends Model
{
    protected $table = 'about_content';

    protected $fillable = [
        'title',
        'content',
        'section',
        'image',
        'list_items',
        'sort_order'
    ];

    protected $casts = [
        'list_items' => 'array'
    ];
}