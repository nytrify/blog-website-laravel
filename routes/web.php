<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Benjamin Panggabean",
        "active" => "about",
        "email" => "cbenjamin.panggabean@gmail.com",
        "title" => "About"
    ]);
});

Route::get('/blog', [PostController::class, "index"]);

Route::get("/blog/{post:slug}", [PostController::class, "show"]);

// Route::get('categories/{category:slug}', function(Category $category){
//     return view('category', [
//         'title' => $category->name,
//         "active" => "categories",
//         'posts' => $category->posts->load('category', 'author'),
//         'category' => $category->name
//     ]);
// });

Route::get('categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        "active" => "categories",
        'categories' => Category::all()
    ]);  
});

// Route::get('author/{author:username}', function(User $author){
//     return view('author', [ 
//         'title' => $author->name,
//         "active" => "author",
//         'posts' => $author->posts->load('category', 'author'),
//     ]);
// });

Route::get("login", [LoginController::class, "index"])->name("login")->middleware("guest");

Route::post("login", [LoginController::class, "authenticate"]);

Route::post("logout", [LoginController::class, "logout"]);

Route::get("register", [RegisterController::class, "index"]);

Route::post("register", [RegisterController::class, "store"])->middleware("guest");

Route::get("dashboard", function(){
    return view("dashboard.index");
})->middleware("auth");

