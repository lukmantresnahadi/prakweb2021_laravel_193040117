<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
    return view('post', [
        "title" => "All Posts",
        "post" => Post::with(['author','category'])->latest()->get()
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