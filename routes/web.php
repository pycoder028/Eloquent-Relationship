<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\Mechanic;
use App\Models\User;
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

    // $users = User::all();
    // $posts = Post::with('comments')->get();
    // $posts = Post::with('categories')->get();
    $mechanics = Mechanic::with('carOwner')->get();

    return view('welcome',compact('mechanics'));
});
