<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\symptoms;
use App\SymptomsCategory;
use App\symptomsTracker;
use Illuminate\Http\Request;
use Redirect,Response;

class SymptomsTrackerController extends Controller
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
        // if(request()->ajax()) 
        // {
 
        //  $created_at = (!empty($_GET["created_at"])) ? ($_GET["created_at"]) : ('');
        //  $updated_at = (!empty($_GET["updated_at"])) ? ($_GET["updated_at"]) : ('');
 
        //  $data = symptoms::whereDate('created_at', '>=', $created_at)->whereDate('updated_at',   '<=', $updated_at)->get(['id','title','start', 'end']);
        //  return Response::json($data);
        // }
        $id = auth::user()->id;
        $symptoms = SymptomsCategory::all();
        $trackedDate = symptomsTracker::where('user_id', '=', $id)->distinct()->get(['created_at']);
        
        return view('symptoms_myiud', compact('symptoms','trackedDate'));
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
        $symptomsId = $request->symptoms_id;
        $symptomsLevel = $request->symptoms_level;
        $this->validate($request, [
            
            'symptoms_level' => 'required',
        ]);
        if ( is_array($symptomsLevel) && !is_null($symptomsLevel[0]) ) {
            # code...
            $results = [];
            foreach ($symptomsLevel as $key => $value) {
                # code...
                $symptomsTracker = new symptomsTracker;
                // $symptomsTracker->array(
                    $symptomsTracker->user_id = auth()->user()->id;
                    $symptomsTracker->symptoms_id = $symptomsId[$key];
                    $symptomsTracker->symptoms_level = $symptomsLevel[$key]; 
                // );
                    $symptomsTracker->created_at = Date('Y-m-d');
                $symptomsTracker->save();   
                 $results[] = $symptomsTracker;

            }
            // print_r($results);
            // exit;
            return redirect()->back()
                ->with(['results' => $results]);
        }
        // // dd($results);
        // $errors = ['Kindly select at least 1 symptoms','Whoops!'];
        // return redirect()->back()
        //     ->with(['errors' => $errors]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function dailyGraph(Request $request)
    {
        //
        $user_id = $request->user()->id;
        $date = $request->trackedDate;

        $this->validate($request,[
            'trackedDate' => 'required',
        ]);
        // $date = date('Y-m-d ', strtotime($date));
            // dd($date);
        $results = symptomsTracker::where([
            ['created_at', '=', $date],['user_id', '=', $user_id],
        ])->get();

        return view('symptoms_myiud_result', compact('results'));
        // dd($result);

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
