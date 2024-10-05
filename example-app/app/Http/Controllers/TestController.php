<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function TestAction ()
    {
        $allPosts = [
            [id => 1 , 'title' => 'PHP' , 'posted_by' => 'Ahmed' , "created_at" =>'2022-10-10 09:00:00' ]

        ];
        return view('test');
    }
}
