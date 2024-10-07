<?php

use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Route; 

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

Route::get('/' , function (){
    return view("welcome");
});

 
Route:: get ('/posts' , [PostController::class , "index" ])->name('posts.index') ;
Route:: get ('/posts/{postbb}' , [PostController::class , 'show'])->name('post.show');

//1- define a new route so the user can access it through browser 
//2- define  controller that renders a view 
//3- define view that containe list of postes
//4-remove any static html data from view
