<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    
    public function index()
    {
        $post = Post::find(1);

        $comments = $post->comments;
        
        dd($comments);
        return view('comments.index');
    }

    
    public function create()
    {
        return view('comments.create');
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(Comment $comment)
    {
        //
    }

    
    public function edit(Comment $comment)
    {
        //
    }

    
    public function update(Request $request, Comment $comment)
    {
        //
    }

    
    public function destroy(Comment $comment)
    {
        //
    }
}
