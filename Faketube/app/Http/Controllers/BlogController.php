<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $blog = $request->search ? Blog::where('id', 'REGEXP', $request->search)->simplePaginate(5) : Blog::latest()->simplePaginate(5);

        return view('index', compact('blog'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     // 'id' => 'required',
        //     'title' => 'required',
        //     'content' => 'reuqired',
        //     'authorID' => 'reuqired',

        // ]);

        $blog = new Blog;
        $blog->id = $request->id;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->authorID = $request->authorID;
        $blog->save();
        
        return redirect()->route('blogs.index')->with('success', 'Blog Added successfully.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        // $request->validate([
            
        //     'title' => 'required',
        //     'content' => 'required',
        //     'authorID' => 'reuqired',
        // ]);
    
        $blog = Blog::find($request->hidden_id);
        // $airplane->id = $request->id;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->authorID = $request->authorID;
        $blog->save();
              
        return redirect()->route('blogs.index')->with('success', 'Blog Data has been updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog Data deleted successfully');
    }
}
