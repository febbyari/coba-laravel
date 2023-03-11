<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('home', [
        "title" => "Home",
        'active' => "home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active' => "about",
        "name" => "Febbyari Rizki Fadillah",
        "email" => "fff@gmail.com",
        "image" => "1.jpg"
    ]);
});



Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(Category $category){
    return view('categories', [
        'title' => 'Post Categories',
        'active' => "categories",
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');










// kga kepake

/** 
Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts', [
        'title' => "Post By Category : $category->name",
        'active' => "categories",
        'posts' => $category->posts->load('user','category'),
    ]);
});

Route::get('/authors/{user:username}', function(User $user){
    return view('posts', [
        'title' => "Post By Author/User : $user->name",
        'active' => "posts",
        'posts' => $user->posts->load('category','user')
    ]);
});
*/