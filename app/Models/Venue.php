<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'address',
        'post_code',
        'city',
        'name',
        'location',
        'image'
    ];

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class);
    }
}
