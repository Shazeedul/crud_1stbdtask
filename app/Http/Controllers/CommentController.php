<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    
    public function index()
    {
        // $posts = Post::with('comments')->get();
        $comments = Comment::with('post')->get();

        // $comments = Comment::all();
        $posts = Post::all();
        
        // dd($post);

        
        return view('comments.index', ['posts' => $posts, 'comments' => $comments]);
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
