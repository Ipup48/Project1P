<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactContent extends Model
{
    protected $table = 'contact_content';

    protected $fillable = [
        'title',
        'content',
        'section',
        'address',
        'phone',
        'email',
        'fax',
        'office_hours',
        'map_url',
        'social_media',
        'sort_order'
    ];

    protected $casts = [
        'social_media' => 'array',
        'office_hours' => 'array'
    ];
}