<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
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
        return $this->belongsToMany(Lesson::class);
    }
}
