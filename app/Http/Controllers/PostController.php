<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // dd(request('search'));
        $posts = Post::latest();
        if (request('search')) {
            $posts->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%');    
        }
        return view('posts', [
            "title" => "All Posts",
            "active" => "posts",
            // "posts" => Post::all(),
            // "posts" => Post::latest()->get()
            "posts" => $posts->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => "posts",
            "post" => $post
        ]);
    }
}
