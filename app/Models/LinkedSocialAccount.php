<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LinkedSocialAccount extends Model
{

    protected $fillable = ['provider_name', 'provider_id', 'provider_avatar' ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
