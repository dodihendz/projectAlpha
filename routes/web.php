<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', ["title" => "Home"]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "gen Halpha betha",
        "email" => "Halpha@ohh.com",
        "image" => "img1.png"
    ]);
});



Route::get('/blog', function () {
    return view('posts', ["title" => "Blog", "posts" => Post::all()]);
});

Route::get('posts/{slug}', function ($slug) {
    $blog_post = Post::all();
    $new_post = [];
    foreach ($blog_post as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    //dd($new_post);   
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
