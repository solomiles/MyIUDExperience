<?php

namespace App\Http\Controllers;

use App\Survey;
use App\Options;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $surveys = Survey::all();
        return view('admin.addSurveyQuestion', compact('surveys'));
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
        // echo 'hit';
        // store survey question
        $survey =  new Survey;
        
        $survey->question = $request->question;
        $survey->type = $request->type;
        $survey->save();

        // store options 
        
        $array = $request->options;
        

        if ( is_array($array) && !is_null($array[0]) ) {
            # code...
            
            foreach ($array as $key => $value) {
                # code...
                $options = new Options;
                $options->survey_id = $survey->id;
                $options->options = $array[$key];
                $options->save();
            }
        }
        
        
        // dd($survey->id);
        // $options = new Options;
        
        // redirect after saving
        return redirect()->route('add-survey-questions.index')
            ->with('success', 'Question added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function show(Survey $survey)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function edit(Survey $survey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Survey $survey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function destroy(Survey $survey,$id)
    {
        //
        // dd($id);
        survey::find($id)->delete();
        
            return redirect()->route('manage-symptoms.index')
    
                ->with('success','Symptoms deleted successfully');
    
    }
}
