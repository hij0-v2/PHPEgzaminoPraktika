<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = auth()->user()->posts;

        return view('user.posts.index', compact('posts'));
    }

    public function create(){

        return view('user.posts.create');
    }

    public function store(Request $request){
        Post::create($request->only('title', 'description'));

        return redirect()->route('user.posts.index');
    }

    public function edit(Post $post){
        return view('user.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post){
        $post->update($request->only('title', 'description'));

        return redirect()->route('user.posts.index');
    }

    public function destroy(Post $post){
        $post->delete();

        return redirect()->route('user.posts.index');
    }

    public function show(Post $post){
        return view('posts.show')->withPost($post);
    }
}
