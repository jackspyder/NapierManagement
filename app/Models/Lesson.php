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
        'spaces_left',
        'course_id',
        'venue_id'
    ];

    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
