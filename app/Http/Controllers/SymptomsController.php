<?php

namespace App\Http\Controllers;

use App\symptoms;
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
        $app = '';
        $phy = '';
        $gyne = '';
        $ment = '';
        $oth = '';
        $type = $request->type;
        $appearances = $request->appearance;
        foreach ($appearances as $appearance) {
            # code...
            $app.=$appearance.',';
        }
        $physicals = $request->physical;
        foreach ($physicals as $physical) {
            # code...
            $phy.=$physical.',';
        }
        $gynecologicals = $request->gynecological;
        foreach ($gynecologicals as $gynecological) {
            # code...
            $gyne.=$gynecological.',';
        }
        $mentals = $request->mental;
        foreach ($mentals as $mental) {
            # code...
            $ment.=$mental.',';
        }
        $others = $request->other;
        foreach ($others as $other) {
            # code...
            $oth.=$other.',';
        }
        $symptoms = new symptoms;
    
        $symptoms->user_id = $request->user()->id;
        $symptoms->type = $type;
        $symptoms->apperance_change = $app;
        $symptoms->physical_pain = $phy;
        $symptoms->gynecological_issue = $gyne;
        $symptoms->mental_health = $ment;
        $symptoms->other = $oth;
        $symptoms->save();

        return redirect()->route('track-symptoms.index')
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
