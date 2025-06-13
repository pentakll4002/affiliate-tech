<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|string|max:255',
            'image' => 'required|url',
            'avatar' => 'required|url',
        ]);

        Fact::create($data);

        return response()->json(['message' => 'Fact created successfully'], 201);
    }
}
