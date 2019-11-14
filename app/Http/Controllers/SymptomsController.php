<?php

namespace App\Http\Controllers;

use App\symptoms;
use App\SymptomsCategory;
use Illuminate\Http\Request;
use Redirect,Response;

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
        $symptomsCategories = SymptomsCategory::all();

        return view('admin.manage_symptoms', compact('symptomsCategories'));
        // return view('symptoms_myiud');
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
        if(request()->ajax()) 
        {
            $insertArr = [ 'symptoms_category_id' => $request->categoryId,
                        'symptoms_name' => $request->symptomsName,
                        'created_at' => Date('Y-m-d'),
                        'updated_at' => Date('Y-m-d'),
                      
                        ];
            $event = symptoms::insert($insertArr);   
            return Response::json($event);
        }

        $this->validate($request, [
            
            'category' => 'required',
        ]);
        $symptoms_category = new SymptomsCategory;
        $symptoms_category->category = $request->category;
        $symptoms_category->save();

        $array = $request->options;
        

        if ( is_array($array) && !is_null($array[0]) ) {
            # code...
            
            foreach ($array as $key => $value) {
                # code...
                $symptoms = new symptoms;
                $symptoms->symptoms_category_id = $symptoms_category->id;
                $symptoms->symptoms_name = $array[$key];
                $symptoms->save();
            }
        }
        
        return redirect()->route('manage-symptoms.index')
            ->with('success', 'Symptoms added successfully');

        
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
     * Display the specified resource.
     *
     * @param  \App\symptomsTracker  $symptomsTracker
     * @return \Illuminate\Http\Response
     */
    public function result()
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
    public function destroy(symptoms $symptoms,$id)
    {
        //
        // dd($id);
        SymptomsCategory::find($id)->delete();
        
            return redirect()->back()
    
                ->with('success','Symptoms deleted successfully');
    
    }
}
