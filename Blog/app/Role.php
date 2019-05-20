<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // Relatie met user
    public function users() 
    {
        return $this->belongsToMany(User::class);
    }
}
