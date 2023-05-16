<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('users.post.index',[
            'posts' => Post::query()
                ->with('comments')
                ->orderBy('created_at','desc')
                ->get()
        ]);
    }
    public function create()
    {
        return view('users.post.create');
    }
    public function store(PostRequest $request)
    {
        abort_if(!auth()->check(),403 ,'Unauthorized');

        $post = Post::create([
            'name' => $request->name,
            'content' => $request->content,
            'user_id' => auth()->id()
        ]);
        if($post)
        {
            return redirect()->route('post.index')->with('status','saved');
        }
    }
}
