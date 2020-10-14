<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Language;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showDashboard(){
        $movies = Movie::all();
        $categories = Category::all();
        $languages = Language::all();
        $users = User::all();
        return view('admin.layout.dashboard', compact('movies', 'categories', 'languages', 'users'));
    }
}
