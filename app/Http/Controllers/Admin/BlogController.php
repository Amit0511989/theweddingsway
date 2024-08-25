<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class BlogController extends Controller
{

    public function index(Request $request){
        $blogs = Blog::orderby('id', 'desc')->get();
        //  echo '<pre>';
        // Print_r($blogs);
        // echo '</pre>';
        // exit(); 
         if ($request->ajax()) { 
            return DataTables::of($blogs)
            ->addColumn('action', function($blogs){
                $actionBtn = '<div class="d-flex flex-row-reverse">
                <form method="GET" action="'. route("blog_delete", $blogs->id) .'"> <input type="hidden" name="_token" value="'. csrf_token() .'" />                  
                <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove show_confirm"><i class="fas fa-times"></i></a>
                </form><a href="'. url("/admin/blog_edit", $blogs->id) .'" class="btn btn-round btn-warning btn-icon btn-sm edit mr-2"><i class="fas fa-edit"></i></a> </div>';
                return $actionBtn;
            })
            ->escapeColumns([])       
            ->make(true);
        } 
        return view('admin.blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new blog post.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $users = User::orderby('id', 'desc')->get();
        return view('admin.blogs.create', compact('users'));
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
            'user_id' => 'required',
            'published_at' => 'nullable|date',
        ]);

        $slug = Str::slug($request->title);

        $count = 1;
        while (Blog::where('slug', $slug)->exists()) {
            $slug = Str::slug($request->title) . '-' . $count;
            $count++;
        }

        $validatedData['slug'] = $slug;
        $validatedData['author'] = $request->user_id;  
        $validatedData['published'] = Auth::id();
        $validatedData['published_at'] = Carbon::now()->format('d-m-Y H:i:s');
        $blog = Blog::create($validatedData);

        return redirect()->route('blog_listing', $blog)->with('success', 'Blog post created successfully.');
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

        return redirect()->route('blogs.show', $blog)->with('success', 'Blog post updated successfully.');
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