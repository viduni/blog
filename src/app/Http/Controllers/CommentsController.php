<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'comment' => 'required',
        ]);

        $comment = new Post([
            'name' => $request->get('name'),
            'comment' => $request->get('comment'),
        ]);

        $comment->save();

        return redirect()
            ->route('read.single')
        ;
    }
}
