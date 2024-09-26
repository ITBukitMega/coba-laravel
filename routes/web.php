    <?php

use App\Http\Controllers\DashboardController;
use App\Models\Post;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\PostController;
    use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

    Route::get('/posts', [PostController::class, "index"]);
    // halaman single post
    Route::get("/posts/{post:slug}", [PostController::class, "show"]);

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


    Route::get('/login', [LoginController::class, "index"]);
    Route::post('/login', [LoginController::class, "authenticate"]);
    Route::get('/register', [RegisterController::class, "index"]);
    Route::post('/register', [RegisterController::class, "store"]);
    Route::get('/dashboard', [DashboardController::class, "index"]);