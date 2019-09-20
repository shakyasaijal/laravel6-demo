<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        // $post = Post::orderBy('id','desc')->take(1)->get();
        // $post = DB::select('Select * from posts');
        // $post = Post::where('title','Post One')->get();
        $post = Post::orderBy('id','desc')->paginate(1);
        return view('posts.index')->with('posts', $post);
    }

    public function create()
    {
        return('posts.create');
    }
}
