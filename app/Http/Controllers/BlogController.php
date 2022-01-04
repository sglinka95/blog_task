<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);
        return view('home')->with('posts', $posts);
    }


    public function show(Post $post)
    {
        $comments = $post->comments()->latest()->limit(10)->get();
        return view('blog.post.index')->with(['post' =>  $post, 'comments' => $comments]);
    }
}
