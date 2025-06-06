<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function getIndex()
    {
        $posts = Post::with('category')->get();
        return view('home', compact('posts'));
    }
}
