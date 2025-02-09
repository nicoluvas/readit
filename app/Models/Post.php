<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
