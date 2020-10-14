<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'video',
        'description',
        'release_year',
        'category_id',
        'quality_id',
        'language_id',
        'status',
        'role_id',
    ];


    function language(){
        return $this->belongsTo(Language::class, 'language_id');
    }
    function quality(){
        return $this->belongsTo(Quality::class, 'quality_id');
    }
    function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
    function movieStatus(){
        return $this->belongsTo(MovieStatus::class, 'movie_status_id');
    }

    function getNameImage(){
        return '/storage/images/' .ltrim($this->image, '/public/images/');
    }

    function getNameVideo(){
        return '/storage/videos/' .ltrim($this->video, '/public/videos/');
    }
}
