<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories.index',[
            'categories' => Category::all()
        ]);
    }



    public function create()
    {
        return view('categories.create');
    }


    public function store(NewCategoryRequest $request)
    {
        Category::query()->create([
            'title' => $request->get('title'),
            'slug' => $request->get('slug'),
            'body' => $request->get('body')
        ]);

        return redirect('/');
    }


    public function edit(Category $category)
    {
        return view('categories.edit',[
           'category' => $category
        ]);
    }


    public function update(Request $request, Category $category)
    {
        $category->update([
            'title' => $request->get('title'),
            'slug' => $request->get('slug'),
            'body' => $request->get('body')
        ]);
        return redirect('/categories');
    }
}
