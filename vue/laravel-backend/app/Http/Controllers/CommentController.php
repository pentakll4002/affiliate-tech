<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum')->only(['store']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Article $article)
    {
        return response()->json($article->comments()->with('user')->latest()->get());
    }

    /**
     * Store a newly created resource in storage.
     */
   // CommentController.php
public function store(Request $request, Article $article)
{
    if (!auth('sanctum')->check()) {
        return response()->json(['message' => 'Authentication required.'], 401);
    }

    $request->validate([
        'content' => 'required|string|max:2000',
    ]);

    $comment = $article->comments()->create([
        'user_id' => auth('sanctum')->id(),
        'content' => $request->content,
    ]);

    return response()->json([
        'message' => 'Comment added successfully', 
        'comment' => $comment->load('user')
    ], 201);
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
