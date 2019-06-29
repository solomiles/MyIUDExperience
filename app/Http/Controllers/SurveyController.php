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
        $options = new Options;
        $options->survey_id = $survey->id;
        $options->option_one = $request->optionOne;
        $options->option_two = $request->optionTwo;
        $options->option_three = $request->optionThree;
        $options->option_four = $request->optionFour;
        $options->option_five = $request->optionFive;
        $options->option_six = $request->optionSix;
        $options->option_seven = $request->optionSeven;
        $options->option_eight = $request->optionEight;
        $options->option_nine = $request->optionNine;
        $options->option_ten = $request->optionTen;
        $options->option_eleven = $request->optionEleven;
        $options->option_twelve = $request->optiontwelve;
        $options->option_thirteen = $request->optionThirteen;
        $options->save();
        
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
    public function destroy(Survey $survey)
    {
        //
    }
}
