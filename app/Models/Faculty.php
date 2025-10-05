<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $table = 'faculties';

    protected $fillable = [
        'name',
        'position',
        'description',
        'image',
        'type',
        'sort_order'
    ];

    protected $casts = [
        'sort_order' => 'integer'
    ];

    public function achievements()
    {
        return $this->hasMany(FacultyAchievement::class);
    }
}