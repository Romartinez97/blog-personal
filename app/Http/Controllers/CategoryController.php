<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('post.index');
    }

    public function show($id)
    {
        return view('post.show', compact('id'));
    }
}
