<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMovie;
use App\Models\Category;
use App\Models\Language;
use App\Models\Movie;
use App\Models\Quality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    public function create(){
        $qualities = Quality::all();
        $categories = Category::all();
        $languages = Language::all();
        return view('admin.movie.add', compact('qualities','categories', 'languages'));
    }

    public function store(CreateMovie $request){

        $movie = new Movie();
        $movie->fill($request->all());

        //kiem tra file ton tai hay k
        if ($request->hasFile('image')) {
            $pathImage = $request->file('image')->store('public/images');
            $movie->image = $pathImage;
        }

        if ($request->hasFile('video')) {
            $pathVideo = $request->file('video')->store('public/videos');
            $movie->video = $pathVideo;
        }

        $movie->save();
        return redirect()->route('movie.list');
    }

    public function showList(){
        $movies = Movie::all();
        return view('admin.movie.list', compact('movies'));
    }
}
