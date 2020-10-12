<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieStatus extends Model
{
    use HasFactory;

    function movieStatus(){
        return $this->hasMany(Movie::class, 'movie_status_id');
    }
}
