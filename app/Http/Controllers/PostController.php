<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post = new Post();
        $post->title = $validated['title'];
        $post->content = $validated['content'];
        $post->save();

        return response()->json($post, 201);
    }

    public function index()
    {
        return response()->json(Post::all());
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return response()->json($post);
    }
}

