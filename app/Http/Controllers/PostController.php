<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('posts.index', compact('posts'));
    }

    public function show($post)
    {
        $post = Post::find($post);
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request) 
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->category = $request->input('category');
        $post->content = $request->input('content');
        $post->save();
        session()->flash('success', 'El post fue creado exitosamente');
        return redirect('/posts');
    }

    public function edit($post)
    {
        $post = Post::find($post);
        return view('posts.edit', compact('post'));
    }
}
