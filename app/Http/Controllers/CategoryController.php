<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        $posts = Post::with('categories')->get();
        // $comments = Comment::with('post')->get();

        // $comments = Comment::all();
        // $posts = Post::all();
        
        dd($posts);

        
        return view('categories.index');
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
