<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Blog;
use App\Response;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware(['auth','verified']);
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogPosts = Blog::orderBy('created_at','DESC')->paginate(3);
        $id = Auth::id();
        if ($id !== '') {
            # code...
            $hasCompletedSurvey = Response::where('user_id',$id)->first();
            if ($hasCompletedSurvey !== '') {
                # code...
                return view('index', compact(['blogPosts','hasCompletedSurvey']));

            }
            
            
        } else{
        

        return view('index', compact('blogPosts'));
        }
    }

    public function display()
    {
        $blogPosts = Blog::orderBy('created_at','DESC')->paginate(3);

        return view('blog', compact('blogPosts'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\ForumComments  $forumComments
     * @return \Illuminate\Http\Response
     * @param int $id
     */
    public function show($id)
    {
        $slug = $id;
        
        $blog_story = Blog::where('slug', $slug)->firstOrFail();

        return view('blog_story', compact('blog_story'));
    }
}
