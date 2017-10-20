<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'start_date',
        'capacity',
        'spaces_left'
    ];

    public function venue()
    {
        return $this->hasOne(Venue::class);
    }

    public function course()
    {
        return $this->hasOne(Course::class);
    }
}
