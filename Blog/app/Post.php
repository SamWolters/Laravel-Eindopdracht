<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Relatie met user
    public function users() 
    {
        return $this->belongsToMany(User::class);
    }

    public function Like()
    {
        return $this->hasMany(Like::class);
    }
}
