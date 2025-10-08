<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
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



Route::get('/blog', [PostController::class, 'index']);

// Route::get('posts/{slug}', function ($slug) {
//     // $blog_post = Post::all();
//     // $new_post = [];
//     // foreach ($blog_post as $post) {
//     //     if ($post["slug"] === $slug) {
//     //         $new_post = $post;
//     //     }
//     // }
//     //dd($new_post);   
//     return view('post', [
//         "title" => "Single Post",
//         // "post" => $new_post,
//         "post" => Post::find($slug)
//     ]);
// });

Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        "title" => $category->name,
        "posts" => $category->posts,
        "category" => $category->name
    ]);
});
Route::get('/categories', function () {
    return view('categories', [
        "title" => "Post Categories",
        "categories" => Category::all()
    ]);
});
