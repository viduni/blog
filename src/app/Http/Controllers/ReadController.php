<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class ReadController extends Controller
{
    public function index(){
        $posts = Post::all();

        return view('read.index', compact([
            'posts',
        ]));
    }

    public function single($postId){
        $post = Post::find($postId);

        return view('read.single', compact([
            'post',
        ]));
    }
}
