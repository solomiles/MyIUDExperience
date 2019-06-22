<?php

namespace App\Http\Controllers;

use App\Forum;
use App\User;
use App\ForumComments;
use Illuminate\Http\Request;


class ForumController extends Controller
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
        $topics = Forum::paginate(5);
        
        
        // foreach ($topics as $topic) {
        //     # code...
        //     $topicCreatedByUser =  $topic->user;
        // }
        // exit;
        return view('forum.forum_topics', compact('topics'));
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'topic' => 'required|string',
        ]);
        
        $user_id = $request->user()->id;
        $topic = $request->topic;
        // echo $user_id, $topic;
        $forum_topic = new Forum;
        $forum_topic->user_id = $user_id;
        $forum_topic->topic = $topic;
        // 
        
        $forum_topic->save();
        // exit ($forum_topic->slug);
        return redirect()->route('forum.index')
            ->with('success', 'Topic created sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function show(Forum $forum)
    {
        //
        // echo $forum;
        // exit;
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function edit(Forum $forum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forum $forum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forum $forum)
    {
        //
    }
}
