<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\User;
use App\Models\Category;
Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Bryan Jonathan",
        "email" => "abang_jonathan@yahoo.com",
        "image" => "images.jpeg"
    ]);
});

Route::get('/blog', [PostController::class, "index"]);


// halaman single post
Route::get("/blog/{post:slug}", [PostController::class, "show"]);

Route::get("/categories", function(){
    return view("categories", [
        "title" => "Post Categories",
        "categories" => Category::all()
    ]);
});


Route::get("/categories/{category:slug}", function(Category $category){
    return view("posts", [
        "title" => "Post by Category : $category->name",
        "Posts" => $category->posts->load("user", "category")
    ]);
});


Route::get("/authors/{user:name}", function(User $user){
    return view("posts", [
        "title" => "Post by Author : $user->name",
        "Posts" => $user->posts->load("category", "user")
    ]);
});