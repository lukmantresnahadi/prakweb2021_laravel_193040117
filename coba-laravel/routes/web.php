<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;

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
        "title" => "home",
        "active" => 'home'
    ]);
});
Route::get('/about', function () {
    return view('about' ,[
        "title" => "about",
        "name" => "Lukman Tresnahadi",
        "email"=> "tresnahadi3@gmail.com",
        "image" => "lukman.jpg",
        "active" => "about"
    ]);
});





Route::get('/post', [PostController::class,'index'] );

  


// halaman single post
Route::get('posts/{post:slug}', [PostController::class,'show']);
Route::get('/categories/', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});
        

route::get('/login', [LoginController::class, 'index']);
route::get('/register', [RegisterController::class, 'index']);
 