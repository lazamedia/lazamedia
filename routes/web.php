<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Post;
use App\Models\User;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostControler;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardJadwalukmController;
use Illuminate\Auth\Middleware\Authorize;

Route::get('/', function () {
    return view('home',[
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/daftar', function () {
    return view('daftar',[
        "title" => "Daftar",
        "active" => "daftar"
    ]);
});

Route::get('/sigin', function () {
    return view('sigin',[
        "title" => "sigin",
        "active" => "sigin"
    ]);
});

Route::get('/tutorial', function () {
    return view('tutorial',[
        "title" => "tutorial",
        "active" => "tutorial"
    ]);
});

Route::get('/about', function () {
    return view('about' , [
        "title" => "About",
        "name"  => "Lazuardi Mandegar",
        "email" => "lazzmedia@gmail.com",
        "image" => "logo.png",
        "active" => "about"
    ]);
});

Route::get('/posts', [PostControler::class, 'index']);

Route::get('posts/{post:slug}', [PostControler::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all(),
        "active" => "categories"
    ]);
});

Route::get('/login', [LoginController::class, 'index' ] )->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate' ] );
Route::post('/logout', [LoginController::class, 'logout' ] );

Route::get('/register', [RegisterController::class, 'index' ] )->middleware('auth');
Route::post('/register', [RegisterController::class, 'store' ] )->middleware('auth');

Route::resource('/dashboard/register', RegisterController::class )->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class )->middleware('auth');

Route::get('/dashboard', function() {
    return view('dashboard.index');
} )->middleware('auth');

Route::get('/user', function() {
    return view('user.index');
} )->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [ DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::get('/dashboard/categories/checkSlug', [ AdminCategoryController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->middleware('auth');

Route::resource('/dashboard/jadwalukm', DashboardJadwalukmController::class)->middleware('auth');

// Route::get('/categories/{category:slug}', function(Category $category) {
//     return view('posts', [
//         'title' => " $category->name",
//         "active" => "categories",
//         'posts' => $category->posts->load('category', 'author')
        
//     ]);
// } );

// Route::get('/authors/{author:username}', function(User $author){
//     return view('posts', [
//         'title' => "Post By  : $author->name",
//         'posts' => $author->posts->load('category', 'author'),
//         "active" => "posts"
        
//     ]);
// });








 Route::get('/contact', function () {
   
     return view('contact', [
         "title" => "Kontak",
         "active" => "contact"
       
     ]);
 });

//halaman single post