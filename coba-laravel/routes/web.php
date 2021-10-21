<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
Route::get('post/{slug}', [PostController::class,'show']); 

            
    
