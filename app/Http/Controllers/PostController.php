<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    public function create() {
        return view('create');
    }

    public function store(Request $request): RedirectResponse
    {
        // Validate inputs
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Create post object
        $post = new Post;
        $post->name = $validated['name'];
        $post->description = $validated['description'];

        // Upload image only if present
        if ($request->hasFile('image')) {

            // Generate unique image name
            $filename = time() . '.' . $request->image->extension();

            // Store in storage/app/public/uploads
            $request->image->storeAs('uploads', $filename, 'public');

            // Save filename in DB
            $post->image = $filename;
        }

        // Save data
        $post->save();

        return redirect()->route('home')->with('success', 'Your post has been created!');
    }
}
