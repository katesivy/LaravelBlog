<?php

namespace App\Http\Controllers;
use App\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index ()
    {
        return new BlogPost(BlogPost::all());
    }
}
