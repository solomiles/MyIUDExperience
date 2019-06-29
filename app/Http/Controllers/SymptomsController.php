<?php

namespace App\Http\Controllers;

use App\symptomsTracker;
use Illuminate\Http\Request;

class SymptomsController extends Controller
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

        return view('symptoms_myiud');
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
        
        // $symptoms = new symptomsTracker;
    
        // $user_id = $request->user()->id;
        // symptomsTracker::create($request->all());
        

        return redirect()->route('track-symptoms.result')
            ->with('success', 'Symptoms Tracked Successfully');
        // dd($request->user()->id, $type, $app, $phy, $gyne, $ment, $oth);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\symptoms  $symptoms
     * @return \Illuminate\Http\Response
     */
    public function show(symptoms $symptoms)
    {
        //
        return view('symptoms_myiud_result');
    }

     /**
     * Display the specified resource.
     *
     * @param  \App\symptomsTracker  $symptomsTracker
     * @return \Illuminate\Http\Response
     */
    public function result(symptoms $symptoms)
    {
        //
        return view('symptoms_myiud_result');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\symptoms  $symptoms
     * @return \Illuminate\Http\Response
     */
    public function edit(symptoms $symptoms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\symptoms  $symptoms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, symptoms $symptoms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\symptoms  $symptoms
     * @return \Illuminate\Http\Response
     */
    public function destroy(symptoms $symptoms)
    {
        //
    }
}
