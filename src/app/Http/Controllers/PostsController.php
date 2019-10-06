<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::all();

        return view('posts.index', compact([
            'posts',
        ]));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required',
            'content'=>'required'
        ]);

        $post = new Post([
            'title'=>$request->get('title'),
            'content'=>$request->get('content')
        ]);

        $post->save();

        return redirect('posts.index')->with('success','Save Post!');
    }

}
