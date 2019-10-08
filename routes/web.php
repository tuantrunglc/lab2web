<?php

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

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('users', function () {
//    $users = factory(User::class, 10)->make()->toArray();
//    return view('starter', [
//        'users' => $users
//    ]);
//});

//Route::get('posts', function () {
//    $posts = factory(Post::class, 10)->make();
//
//    return view('posts', [
//        'posts' => $posts
//    ]);
//});
Route::resource('posts','PostController');
Route::resource('users','UserController');
