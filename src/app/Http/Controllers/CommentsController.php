<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request, $postId){
        $request->validate([
            'name' => 'required',
            'comment' => 'required',
        ]);

        $comment = new Comment([
            'name' => $request->get('name'),
            'comment' => $request->get('comment'),
        ]);

        $comment->save();

        $post = Post::find($postId);

        return redirect()
            ->route('read.single', compact([
                'post',
            ]))
        ;
    }
}
