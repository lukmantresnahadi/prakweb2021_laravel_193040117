<?php

use App\Http\Controllers\DashboardController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
        

route::get('/login', [LoginController::class, 'index'])->name['login']->middleware('guest');
route::post('/login', [LoginController::class, 'authenticate']);
route::post('/logout', [LoginController::class, 'logout']);

route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class])->middleware('auth');