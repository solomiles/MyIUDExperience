<?php

namespace App\Http\Controllers;

use App\Survey;
use App\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResponseController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $surveyQuestions = Survey::all();
        // exit($surveyQuestions);
        return view('survey', compact('surveyQuestions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('completedSurvey');
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
        $surveyId = $request->questionId;
        $array = $request->response;
        if ( is_array($array) && !is_null($array[0]) ) {
            # code...
            
            foreach ($surveyId as $key => $value) {
                # code...
                $response = new Response;
                // $response->array(
                    $response->user_id = auth()->user()->id;
                    $response->survey_id = $surveyId[$key];
                    $response->response = $array[$key]; 
                // );
                $response->save();
            }

            return redirect()->route('home.index')
                ->with('success', 'Thanks for filling out our survey');
        }
        // dd($array);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function show(Response $response)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function edit(Response $response)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Response $response)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function destroy(Response $response)
    {
        //
    }
}
