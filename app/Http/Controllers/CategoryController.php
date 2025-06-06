<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    public function getIndex()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function getShow(Category $category)
    {
        $posts = $category->posts()->with('category')->get();
    return view('category.show', compact('category', 'posts'));
    }

    public function getCreate()
    {
        return view('category.create', compact('id'));
    }

    public function getEdit($id)
    {
        return view('category.edit', compact('id'));
    }
}
