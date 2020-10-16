<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    //
        function storeComment(Request $request){
            $comment = new Comment();
            $comment->desc = $request->desc;
            $comment->user_id = Auth::user()->id;
            $comment->movie_id = $request->movie_id;
            $comment->save();

            return redirect()->back();
        }
}
