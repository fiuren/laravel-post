<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    public function posts()
    {
        // tiene uno, tiene varios, pertenece a uno, pertenece a varios
        return $this -> hasMany(Post::class);
    }
}

