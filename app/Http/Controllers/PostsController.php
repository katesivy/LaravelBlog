<?php


namespace App\Http\Controllers;
use App\Http\Resources\PostsResource;
use App\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index ()
    {
        // $posts = Post::table('posts')->get();
        $posts = Post::all();
        // return new Post;
        // return new PostsResource(Post::with(['posts'])->get());
    }
}
