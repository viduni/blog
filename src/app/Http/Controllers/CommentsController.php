<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'text' => 'required',
        ]);

        $comment = new Comment();

        $comment->name = $request->name;
        $comment->text = $request->text;
        $comment->post_id = $request->post_id;

        $comment->save();

        return redirect()
            ->route('read.single', [ $request->post_id ])
        ;
    }
}
