<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\PostValidationRequest;
use App\Models\Customer;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    
    public function index()
    {
        $posts = Post::with('customer')->get();

        return view('posts.index', ['post'=>$posts]);
    }

    
    public function create()
    {
        $customers = Customer::with('post')->get();
        return view('posts.create', ['customer'=>$customers]);
    }

    
    public function store(PostValidationRequest $request)
    {
        $request->validated();

        $image = Storage::put('post',$request->file('post_img'));

        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'post_img' => $image,
            'customer_id' => $request->customer_id,
        ]);

        

        return redirect()->route('posts.index')
            ->with('status', 'Post created successfully.');
    }

    
    public function show(Post $post)
    {
        return view('posts.show', ['post'=>$post]);
    }

    
    public function edit(Post $post)
    {
        return view('posts.edit', ['post'=>$post]);
    }

    
    public function update(PostValidationRequest $request, Post $post)
    {
        return redirect()->route('posts.index')
            ->with('status', 'Customer updated successfully');
    }

    
    public function destroy(Post $post)
    {
        $post->delete();
        
        return redirect()->route('posts.index')
            ->with('status', 'Customer deleted successfully');
    }
}
