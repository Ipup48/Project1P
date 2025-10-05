<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FacultyAchievement extends Model
{
    protected $fillable = [
        'faculty_id',
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

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }
}
