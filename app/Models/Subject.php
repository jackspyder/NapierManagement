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
        'summary',
        'description',
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function venues()
    {
        return $this->hasManyThrough(Venue::class, Lesson::class);
    }

//    public function users()
//    {
//        return $this->hasManyThrough(User::class, Lesson::class);
//    }
}