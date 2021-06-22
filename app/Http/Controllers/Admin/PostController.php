<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->get();

        return view('admin.posts.index', compact('posts'));
    }

    public function create(){

        return view('admin.posts.create');
    }

    public function store(Request $request){
        Post::create($request->only('title', 'description'));

        return redirect()->route('admin.posts.index');
    }

    public function edit(Post $post){
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post){
        $post->update($request->only('title', 'description'));

        return redirect()->route('admin.posts.index');
    }

    public function destroy(Post $post){
        $post->delete();

        return redirect()->route('admin.posts.index');
    }
}
