<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fact;
use Illuminate\Support\Facades\Storage;

class FactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        $facts = Fact::all();
        return response()->json($facts);
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|string',
            'avatar' => 'required|string',
        ]);

        // Image and avatar are now expected to be URLs from the frontend
        $imageUrl = $request->image;
        $avatarUrl = $request->avatar;

        $fact = Fact::create([
            'user_id' => auth()->user()->id,
            'username' => auth()->user()->name,
            'image' => $imageUrl,
            'avatar' => $avatarUrl,
        ]);

        return response()->json(['message' => 'Fact created successfully', 'fact' => $fact], 201);
    }
}
