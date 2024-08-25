<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Show the form for creating a new blog post.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created blog post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'author' => 'required|string|max:255',
            'slug' => 'required|string|unique:blog,slug',
            'image' => 'nullable|string',
            'published' => 'boolean',
            'published_at' => 'nullable|date',
        ]);

        $blog = Blog::create($validatedData);

        return redirect()->route('admin.blogs.show', $blog)->with('success', 'Blog post created successfully.');
    }

    /**
     * Show the form for editing the specified blog post.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\View\View
     */
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified blog post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Blog $blog)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'author' => 'required|string|max:255',
            'slug' => 'required|string|unique:blog,slug,' . $blog->id,
            'image' => 'nullable|string',
            'published' => 'boolean',
            'published_at' => 'nullable|date',
        ]);

        $blog->update($validatedData);

        return redirect()->route('admin.blogs.show', $blog)->with('success', 'Blog post updated successfully.');
    }

    /**
     * Remove the specified blog post from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog post deleted successfully.');
    }
}