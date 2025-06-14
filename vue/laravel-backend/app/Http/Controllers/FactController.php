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

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('facts', 'public');
        $avatarPath = $request->file('avatar')->store('facts', 'public');

        Fact::create([
            'username' => auth()->user()->name,
            'image' => Storage::url($imagePath),
            'avatar' => Storage::url($avatarPath),
        ]);

        return response()->json(['message' => 'Fact created successfully'], 201);
    }
}
