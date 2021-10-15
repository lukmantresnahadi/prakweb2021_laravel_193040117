<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "home"
    ]);
});
Route::get('/about', function () {
    return view('about' ,[
        "title" => "about",
        "name" => "Lukman Tresnahadi",
        "email"=> "tresnahadi3@gmail.com",
        "image" => "lukman.jpg"
    ]);
});





Route::get('/post', function () {
    $blog_post = [
    [
        "title" => "Judul Post pertama",
        "slug" => "judul-post-pertama",
        "author" =>"Lukman Tresnahadi",
        "body" => " Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam molestiae,
         maiores ducimus eum voluptas velit minus adipisci, qui exercitationem, tenetur vero pariatur? Ratione, 
        nihil dolorem excepturi iure commodi accusamus blanditiis."
    ],
    
    [
      "title" => "Judul Post kedua",
        "slug" => "judul-post-kedua",
        "author" =>"Lukman Tresnahadi",
        "body" => " Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam molestiae,
         maiores ducimus eum voluptas velit minus adipisci, qui exercitationem, tenetur vero pariatur? Ratione, 
        nihil dolorem excepturi iure commodi accusamus blanditiis."
    ],
];
    return view('post' , [
        "title" => "post",
        "post" => $blog_post
    ]);
});

//halaman single post//
Route::get('post/{slug}', function ($slug) {
    $blog_post = [
        [
            "title" => "Judul Post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Lukman Tresnahadi",
            "body" => " Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam molestiae,
         maiores ducimus eum voluptas velit minus adipisci, qui exercitationem, tenetur vero pariatur? Ratione, 
        nihil dolorem excepturi iure commodi accusamus blanditiis."
        ],

        [
            "title" => "Judul Post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Lukman Tresnahadi",
            "body" => " Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam molestiae,
         maiores ducimus eum voluptas velit minus adipisci, qui exercitationem, tenetur vero pariatur? Ratione, 
        nihil dolorem excepturi iure commodi accusamus blanditiis."
        ],
    ];
    $new_posts = [];
    foreach($blog_post as $posts){
        if($posts["slug"]=== $slug){
            $new_post = $posts;
            
        }
    }
    return view('posts',[
        "title" => "single post",
        "posts" => $new_posts
    ]);
});