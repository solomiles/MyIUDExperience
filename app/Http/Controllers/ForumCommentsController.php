<?php

namespace App\Http\Controllers;

use App\ForumComments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Forum;

class ForumCommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @param int $id
     */
    public function index()
    {
        //

        // return view('forum.forum_discussion', compact('id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $comments = $request->comments;
        $posted_by = $request->user()->id;
        $forum_id = $request->topic_id;
        
        $forumComments = new ForumComments;

        $forumComments->user_id = $posted_by;
        $forumComments->forum_id = $forum_id;
        $forumComments->comments = $comments;
        $forumComments->save();

        return redirect()->route('forum.index')
            ->with('success', 'Thanks for sharing your thoughts with us');
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
        //
        $slug = $id;
         $comments = Forum::where('slug', $slug)->firstOrFail();;
    //    'forumComments', 'user'])->get();  
    // echo $comments->forumcomments;
    //     exit;      
        return view('forum.forum_discussion', compact('comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ForumComments  $forumComments
     * @return \Illuminate\Http\Response
     */
    public function edit(ForumComments $forumComments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ForumComments  $forumComments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ForumComments $forumComments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ForumComments  $forumComments
     * @return \Illuminate\Http\Response
     */
    public function destroy(ForumComments $forumComments)
    {
        //
    }
}
