<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function exists()
    {
        return $this->belongsToMany(Post::class);
    }
}
