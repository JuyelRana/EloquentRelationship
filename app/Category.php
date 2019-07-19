<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Under one Category has many post
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
