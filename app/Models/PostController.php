<?php

namespace App\Http\Controllers;

use Illuminate\Htttp\Request;
use App\Models\Post;

class PostControllers extends Controllers
{
    public function index()
    {
        return view('posts', [
            "title" => "Posts"
        ]);
    }
}
 

    {
        return view('post',[
            "post" => Post::find($slug)
        ]);
    };

