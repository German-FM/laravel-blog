<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(10);

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request) 
    {
        $request->validate([
            'title' => ['required', 'min:1', 'max:255'],
            'slug' => "required|unique:posts,slug",
            'content' => 'required',
            'category' => 'required',
        ]);
        $post = Post::create($request->all());
        Mail::to('prueba@prueba.com') ->send(new \App\Mail\PostCreatedMail($post));

        // $post = new Post();
        // $post->title = $request->input('title');
        // $post->slug = $request->input('slug');
        // $post->category = $request->input('category');
        // $post->content = $request->input('content');
        // $post->save();
        session()->flash('success', '¡Adición exitosa!');
        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => ['required', 'min:1', 'max:255'],
            'slug' => "required|unique:posts,slug,{$post->id}",
            'content' => 'required',
            'category' => 'required',
        ]);
        Post::create($request->all());
        // $post->title = $request->input('title');
        // $post->slug = $request->input('slug');
        // $post->category = $request->input('category');
        // $post->content = $request->input('content');

        $post->save();

    
        return redirect()->route('posts.edit', $post)->with('success', '¡Actualización exitosa!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        session()->flash('success', 'El post fue eliminado exitosamente');
        return redirect()->route('posts.index');
    }
}
