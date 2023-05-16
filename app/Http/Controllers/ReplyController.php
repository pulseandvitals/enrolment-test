<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Comment;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
  public function store(Request $request, Comment $comment)
  {
    $reply = Reply::create([
        'reply' => $request->reply,
        'parent_post_id' => $comment->parent_post_id,
        'user_id' => auth()->id(),
        'comment_id' => $comment->id,
    ]);
    if($reply)
    {
        return redirect()->back();
    }
  }
}
