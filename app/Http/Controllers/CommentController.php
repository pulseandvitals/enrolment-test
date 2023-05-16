<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        //
    }
    public function create()
    {
        //
    }
    public function store(Request $request, Post $post)
    {
        $comment = Comment::create([
            'parent_post_id' => $post->id,
            'user_id' => auth()->id(),
            'comment' => $request->comment,
        ]);

        if($comment)
        {
            return redirect()->back();
        }
    }
}
