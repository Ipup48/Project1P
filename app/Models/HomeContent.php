<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeContent extends Model
{
    protected $table = 'home_content';

    protected $fillable = [
        'title',
        'content',
        'section',
        'image',
        'subtitle',
        'list_items',
        'link',
        'link_text',
        'sort_order'
    ];

    protected $casts = [
        'list_items' => 'array'
    ];
}