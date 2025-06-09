<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'content' => 'required|min:3'
        ]);

        $post->comments()->create([
            'content' => $request->content,
            'user_id' => Auth::id()
        ]);

        return back()->with('success', 'Your comment has been posted!');
    }
}