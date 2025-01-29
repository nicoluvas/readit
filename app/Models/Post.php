<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
