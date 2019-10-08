<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function create()
    {
        if (is_null(auth()->user())) {
            return redirect()
                ->route('login')
            ;
        }

        return view('categories.create');
    }

    public function edit(int $id)
    {
        if (is_null(auth()->user())) {
            return redirect()
                ->route('login')
            ;
        }

        $category = Category::find($id);

        return view('categories.edit', compact('category'));
    }

    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact([
            'categories',
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
            'name' => 'required',
            'label' => 'required',
        ]);

        $category = new Category([
            'name' => $request->get('name'),
            'label' => $request->get('label'),
        ]);

        $category->save();

        return redirect()
            ->route('categories.index')
            ->with('success', 'Save Category!')
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
            'name' => 'required',
            'label' => 'required',
        ]);

        $category = Category::find($id);
        $category->name = $request->get('name');
        $category->label = $request->get('label');
        $category->save();

        return redirect()
            ->route('categories.index')
            ->with('success', 'Category updated!')
        ;
    }
}
