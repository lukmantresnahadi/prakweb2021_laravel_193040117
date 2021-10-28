<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

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





Route::get('/post', [PostController::class,'index'] );

  


// halaman single post
Route::get('posts/{post}', [PostController::class,'show']);
Route::get('/categories/', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});
            
    
Route::get('/categories/{category:slug}',function(Category $category){
    return view('post',[
        'title' =>"Post by category : $category->name",
        'posts' =>$category,
        'category' => $category->post->load('category','author')
    ]);
});

route:: get('/author/{author:username}',function(User $author){

        return view('post', [
            'title' => "Post by Author : $author->name" ,
            'posts' => $author->post->load('category','author'),
           
        ]);     
    
    });