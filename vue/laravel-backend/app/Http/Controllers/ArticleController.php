<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        $articles = Article::with('user')->latest()->get();
        return response()->json($articles);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $imageUrl = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images/articles', 'public');
            $imageUrl = Storage::url($path);
        }

        $article = Article::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'content' => $request->content,
            'image_url' => $imageUrl,
        ]);

        return response()->json([
            'message' => 'Article created successfully', 
            'article' => $article->load('user')
        ], 201);
    }

    public function show(Article $article)
    {
        $article->loadCount(['likes', 'dislikes', 'shares', 'comments']);
        return response()->json($article->load('user'));
    }

    public function update(Request $request, Article $article)
    {
        if ($request->user()->id !== $article->user_id) {
            return response()->json([
                'message' => 'You are not authorized to update this article.'
            ], 403);
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $imageUrl = $article->image_url;

        if ($request->hasFile('image')) {
            if ($imageUrl && Storage::disk('public')->exists(str_replace('/storage/', '', $imageUrl))) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $imageUrl));
            }
            $path = $request->file('image')->store('images/articles', 'public');
            $imageUrl = asset(Storage::url($path));
        } elseif ($request->input('remove_image')) {
            if ($imageUrl && Storage::disk('public')->exists(str_replace('/storage/', '', $imageUrl))) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $imageUrl));
            }
            $imageUrl = null;
        }

        $article->update([
            'title' => $request->title,
            'content' => $request->content,
            'image_url' => $imageUrl,
        ]);

        return response()->json([
            'message' => 'Article updated successfully',
            'article' => $article->load('user')
        ]);
    }

    public function destroy(Article $article)
    {
        if (auth()->user()->id !== $article->user_id) {
            return response()->json([
                'message' => 'You are not authorized to delete this article.'
            ], 403);
        }

        if ($article->image_url && Storage::disk('public')->exists(str_replace('/storage/', '', $article->image_url))) {
            Storage::disk('public')->delete(str_replace('/storage/', '', $article->image_url));
        }

        $article->delete();

        return response()->json(['message' => 'Article deleted successfully']);
    }
}