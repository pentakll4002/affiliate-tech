<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class ImageUploadController extends Controller
{
    public function upload(Request $request)
    {
        // Validate both image and avatar, making them nullable
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageUrl = null;
        $avatarUrl = null;

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/facts', 'public');
            $imageUrl = asset(Storage::url($imagePath));
        }

        // Handle avatar upload
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $avatarUrl = asset(Storage::url($avatarPath));
        }

        // Return the URLs with consistent keys for frontend
        return response()->json([
            'image_url' => $imageUrl,
            'avatar_url' => $avatarUrl,
            'message' => 'Images uploaded successfully!'
        ], 200);
    }
}
