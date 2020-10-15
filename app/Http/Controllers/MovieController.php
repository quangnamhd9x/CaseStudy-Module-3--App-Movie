<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMovie;
use App\Models\Category;
use App\Models\Language;
use App\Models\Movie;
use App\Models\Quality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $categories = Category::all();
        $languages = Language::all();
        return view('admin.movie.list', compact('movies', 'categories', 'languages'));
    }

    public function showDetail($id){
        $movies = Movie::all();
        $movie = Movie::findOrFail($id);
        $categories = Category::all();
        $languages = Language::all();
        $qualities = Quality::all();
        return view('admin.movie.detail', compact('movie', 'categories', 'languages', 'qualities', 'movies'));
    }

    public function edit($id){
        $movie = Movie::findOrFail($id);
        $categories = Category::all();
        $languages = Language::all();
        $qualities = Quality::all();
        return view('admin.movie.edit', compact('movie', 'categories', 'languages', 'qualities'));
    }

    public function update(Request $request, $id){
        $movie = Movie::findOrFail($id);
        $movie->fill($request->all());
        $movie->save();
        return redirect()->route('movie.list');
    }

    public function destroy($id){
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return redirect()->route('movie.list');
    }
}
