<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    // Relatie met user
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    // Relatie met user
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
