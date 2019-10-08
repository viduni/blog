<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create()
    {
        if (is_null(auth()->user())) {
            return redirect()
                ->route('login')
            ;
        }

        return view('posts.create');
    }

    public function edit(int $id)
    {
        if (is_null(auth()->user())) {
            return redirect()
                ->route('login')
            ;
        }

        $post = Post::find($id);
        $categories = Category::all();

        return view('posts.edit', compact([
            'post',
            'categories',
        ]));
    }

    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact([
            'posts',
        ]));
    }

    public function store(Request $request)
    {
        if (is_null(auth()->user())) {
            return redirect()
                ->route('login')
            ;
        }

        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post = new Post([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
        ]);

        $post->save();

        return redirect()
            ->route('posts.index')
        ;
    }

    public function update(Request $request, $id)
    {
        if (is_null(auth()->user())) {
            return redirect()
                ->route('login')
            ;
        }

        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post = Post::find($id);
        $post->title = $request->get('title');
        $post->content = $request->get('content');
        $post->save();

        $post
            ->categories()
            ->sync($request->get('categories'))
        ;

        return redirect()
            ->route('posts.edit', [ $id ])
            ->with('success', 'Post updated!')
        ;
    }
}
