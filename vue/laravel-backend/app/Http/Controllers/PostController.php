<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('user')->latest()->get();
        return response()->json($posts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048', // Max 2MB
        ]);

        $imageUrl = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images/posts', 'public');
            $imageUrl = Storage::url($path);
        }

        $post = Post::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'content' => $request->content,
            'image_url' => $imageUrl,
        ]);

        return response()->json(['message' => 'Post created successfully', 'post' => $post->load('user')], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return response()->json($post->load('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        if ($request->user()->id !== $post->user_id) {
            return response()->json(['message' => 'You are not authorized to update this post.'], 403);
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048', // Max 2MB
        ]);

        $imageUrl = $post->image_url;

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($imageUrl && Storage::disk('public')->exists(str_replace('/storage/', '', $imageUrl))) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $imageUrl));
            }
            $path = $request->file('image')->store('images/posts', 'public');
            $imageUrl = Storage::url($path);
        } elseif ($request->input('remove_image')) { // Allow explicit image removal
            if ($imageUrl && Storage::disk('public')->exists(str_replace('/storage/', '', $imageUrl))) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $imageUrl));
            }
            $imageUrl = null;
        }

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'image_url' => $imageUrl,
        ]);

        return response()->json(['message' => 'Post updated successfully', 'post' => $post->load('user')]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if (auth()->user()->id !== $post->user_id) {
            return response()->json(['message' => 'You are not authorized to delete this post.'], 403);
        }

        // Delete associated image
        if ($post->image_url && Storage::disk('public')->exists(str_replace('/storage/', '', $post->image_url))) {
            Storage::disk('public')->delete(str_replace('/storage/', '', $post->image_url));
        }

        $post->delete();

        return response()->json(['message' => 'Post deleted successfully']);
    }
}
