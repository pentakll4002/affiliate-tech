<?php
namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleInteraction;
use Illuminate\Http\Request;

class InteractionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function interact(Request $request, Article $article, $type)
    {
        $validTypes = ['like', 'dislike', 'share'];
        
        if (!in_array($type, $validTypes)) {
            return response()->json(['message' => 'Invalid interaction type'], 400);
        }

        $existing = ArticleInteraction::where([
            'user_id' => auth()->id(),
            'article_id' => $article->id,
            'type' => $type
        ])->first();

        if ($existing) {
            $existing->delete();
            $action = 'removed';
        } else {
            ArticleInteraction::create([
                'user_id' => auth()->id(),
                'article_id' => $article->id,
                'type' => $type
            ]);
            $action = 'added';
        }

        $count = $article->{$type . 's'}()->count();

        return response()->json([
            'message' => "Interaction $action successfully",
            'count' => $count,
            'type' => $type
        ]);
    }
}