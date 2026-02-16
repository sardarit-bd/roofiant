<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str; // for slug generation
use Illuminate\Support\Facades\Auth; // to get logged-in user

class BlogController extends Controller
{
    // Display all blogs
    public function index()
    {
        $blogs = Blog::with('user')->get(); // include user info
        return view('pages.blogs.index', compact('blogs'));
    }

    // Show the form to create a new blog
    public function create()
    {
        return view('pages.blogs.create');
    }

    // Store a new blog
    public function store(Request $request)
    {
        // Validate request data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'content' => 'required|string',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('blogs', 'public'); // storage/app/public/blogs
            $validated['image'] = $path;
        }

        // Add slug and user_id
        $validated['slug'] = Str::slug($validated['title']);
        $validated['user_id'] = Auth::id(); // or assign manually

        // Create blog
        Blog::create($validated);

        return redirect()->back()->with('success', 'Blog created successfully.');
    }

    // Show a single blog
    public function show(Blog $blog)
    {
        return view('pages.blogs.details', compact('blog'));
    }

    // Show form to edit a blog
    public function edit(Blog $blog)
    {
        return view('pages.blogs.edit', compact('blog'));
    }

    // Update a blog
    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'content' => 'required|string',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('blogs', 'public');
            $validated['image'] = $path;
        }

        // Update slug
        $validated['slug'] = Str::slug($validated['title']);

        $blog->update($validated);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    // Delete a blog
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
