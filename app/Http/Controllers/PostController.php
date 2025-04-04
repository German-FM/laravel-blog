<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function show($post, $category = null)
    {
        return view('posts.show', [
            'post' => $post,
            'category' => $category
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }
}
