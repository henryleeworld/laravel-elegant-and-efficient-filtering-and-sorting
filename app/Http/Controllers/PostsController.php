<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostsController extends Controller
{
    public function get() 
    {
        return Post::filter()->get();
    }
}
