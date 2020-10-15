<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Language;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        if (Gate::allows('crud-user')) {
            $movies = Movie::all();
            $categories = Category::all();
            $languages = Language::all();
            $users = User::all();
            return view('admin.layout.dashboard', compact('movies', 'categories', 'languages', 'users'));
        } else {
            return redirect()->route('view.index');
        }
    }
}
