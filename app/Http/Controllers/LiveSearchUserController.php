<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LiveSearchUserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();

        return view('admin.user.search', compact('users'));
    }

    public function search(Request $request)
    {
        $users = DB::table('users')->where('name','like','%'.$request->search.'%')->get();

        return response()->json($users);
    }
}
