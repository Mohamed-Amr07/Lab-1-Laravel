<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\viewPostsController;
use Illuminate\Support\Facades\Route;

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
    //echo 'Welcome from route!';
    return view('welcome');
});

Route::get('/hello', [  ProductController::class, 'getProducts'  ]);

Route::get('/post', [PostController::class, 'getPosts']);

Route::get('/viewPosts/{id}', [PostController::class, 'getOnePost'])->name('post_Name');