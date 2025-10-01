<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "gen Halpha betha",
        "email" => "Halpha@ohh.com",
        "image" => "img1.png"
    ]);
});

Route::get('/blog', function () {
    return view('posts');
});
