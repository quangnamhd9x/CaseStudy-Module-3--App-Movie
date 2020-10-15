<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LiveSearchController extends Controller
{
    public function index()
    {
        $movies = DB::table('movies')->get();
        return view('index', compact('movies'));
    }

    public function search(Request $request)
    {
        $movies = DB::table('movies')->where('title','LIKE','%'.$request->search.'%')->get();
        return view('guest.resultSearch', compact('movies'));
    }
}
//class LiveSearchController extends Controller
//{
//    public function index()
//    {
//        $movies = DB::table('movies')->get();
//
//        return view('search.search', compact('movies'));
//    }
//
//    public function search(Request $request)
//    {
//        $movies = DB::table('movies')->where('title','like','%'.$request->search.'%')->get();
//
//        return response()->json($movies);
//    }
//}
