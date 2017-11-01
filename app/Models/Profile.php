<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $fillable = [
        'website',
        'address',
        'post_code',
        'dob',
        'occupation',
        'company',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
