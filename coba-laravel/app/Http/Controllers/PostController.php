<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
    return view('posts', [
        "title" => "posts",
        "post" => Post::latest()->get
    ]);
    }
    public function show(post $post)
    {
        return view('posts', [
            "title" => "Single Post",
            "post" => $post
        ]);
}
}