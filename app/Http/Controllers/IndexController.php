<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Language;
use App\Models\Movie;
use App\Models\Quality;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function showIndex(){
        $movies = Movie::all();
        $movieSlide = Movie::where('id','<=', '3')->get();
        $upcomingMovies = Movie::where('status', '2')->get();
        $favorites = Movie::where('status', '1')->get();
        return view('index', compact('upcomingMovies', 'favorites', 'movies', 'movieSlide'));
    }

//    public function showDetail($id){
//        $movies = Movie::findOrFail($id);
//        $categories = Category::all();
//        $languages = Language::all();
//        $qualities = Quality::all();
//        return view('guest.detail', compact('movies', 'categories', 'languages', 'qualities'));
//    }

    public function showDetail($id){
        $movie = Movie::findOrFail($id);
        $categories = Category::all();
        $languages = Language::all();
        $qualities = Quality::all();
        return view('guest.detail', compact('movie', 'categories', 'languages', 'qualities'));
    }

    public function detail(Request $request, $id){
        $movie = Movie::findOrFail($id);
        $movie->fill($request->all());
        $movie->save();
        return redirect()->route('view.index');
    }
}
