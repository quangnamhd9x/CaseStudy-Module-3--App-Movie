<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Language;
use App\Models\Movie;
use App\Models\Quality;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class IndexController extends Controller
{
    public function showIndex()
    {
        $users = User::all();
        $movies = Movie::all();
        $movieSlide = Movie::where('id', '<=', '3')->get();
        $upcomingMovies = Movie::where('status', '2')->get();
        $favorites = Movie::where('status', '1')->get();
        return view('index', compact('upcomingMovies', 'favorites', 'movies', 'movieSlide', 'users'));
    }

    public function showDetail($id)
    {
        $movies = Movie::all();
        $movie = Movie::findOrFail($id);
        $categories = Category::all();
        $languages = Language::all();
        $qualities = Quality::all();

        $comments = Comment::all()->where('user_id','=',Auth::user()->id);
        return view('guest.detail', compact('movie', 'categories', 'languages', 'qualities', 'movies','comments'));
    }

    public function detail(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->fill($request->all());
        $movie->save();
        return redirect()->route('view.index');
    }
}
