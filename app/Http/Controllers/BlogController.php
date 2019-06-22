<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $allPost = Blog::all();

        return view('admin.blog_all_post', compact('allPost'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.blog_add_new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // echo 'hit';
        $this->validate($request,[
            'image' => 'file|max:600',
            'author' => 'required',
            'title' => 'required',
            'text' => 'required',

        ]);
        $author = $request->author;
        $title = $request->title;
        $text = $request->text;

        $image = $request->file('image');
        $filename = time().$image->getClientOriginalName();

        Storage::disk('local')->putFileAs(
            'public/'.$filename,
            $image,
            $filename
        );

        $blogPost = new Blog;
        $blogPost->author = $author;
        $blogPost->title = $title;
        $blogPost->text = $text;
        $blogPost->filename = $filename;
        $blogPost->save();

        return redirect()->route('manage-blog.index')
            ->with('success', 'New Blog Post Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
        echo 'hit';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
        echo 'hit';
        exit;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
