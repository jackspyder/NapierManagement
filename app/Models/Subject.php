<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'price',
        'duration',
        'title',
        'qualification',
        'awarded_by',
        'overview',
        'description',
        'who_for',
        'requirements',
        'career_path'
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

//    public function users()
//    {
//        return $this->hasManyThrough(User::class, Lesson::class);
//    }
}