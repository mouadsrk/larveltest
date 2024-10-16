<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index ()
    {
        $allPosts = [
            ['id' => 1 , 'title' => 'PHP' , 'posted_by' => 'Ahmed' , "created_at" =>'2022-10-10 09:00:00' ],
            ['id' => 2 , 'title' => 'Javascript' , 'posted_by' => 'Mohamed' , "created_at" =>'2023-08-10 09:00:00' ],
            ['id' => 3 , 'title' => 'HTML' , 'posted_by' => 'Mohamed' , "created_at" =>'2023-10-06 09:00:00' ],
            ['id' => 4 , 'title' => 'CSS' , 'posted_by' => 'Ali' , "created_at" =>'2022-08-07 09:00:00' ]
        ];
        return view('Posts.index' , ['posts' => $allPosts]) ;
    }
    public function show($PostId)
    {
        $singelPost = ['id' => $PostId ,'description' => 'this is description' , 'title' => 'PHP' , 'posted_by' => 'Ahmed' , "created_at" =>'2022-10-10 09:00:00'];
        return  view('Posts.show'  ,['post' =>  $singelPost]);  
    }
    public function create()
    {
        return  view('Posts.create'); 
    }
    public function store()
    {

        $data =  request()->all();
        $title = request()->title;
        $description  =request()->description;
        $postCreator = request()->post_creator;
        // dd($data->request);

        dd($data , $title , $description , $postCreator);
        return redirect()->route('posts.index');
    }
}

// 1-get user data
// 2- strore user data in database
// 3- redirection to posts.index
