<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Score;


class ScoreController extends Controller
{

       /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $scores_level_1 = Score::where('level',1)->orderBy('time_taken')->get();
        $scores_level_2 = Score::where('level',2)->orderBy('time_taken')->get();
        $scores_level_3 = Score::where('level',3)->orderBy('time_taken')->get();

        return view('scoreboard')->with('scores_level_1',$scores_level_1)->with('scores_level_2',$scores_level_2)->with('scores_level_3',$scores_level_3);


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


    /**
     * Display the specified resource.
     *
   
     * @return \Illuminate\Http\Response
     * @param  \Illuminate\Http\Request  $request
     */
    public function updateScoreboard(Request $request)
    {
        //Get time for this level and user
        $user_id = Auth::id(); 

        $score = Score::where([
            ['level', '=', $request->level],
            ['user_id', '=', $user_id]
        ])->first();

        // if new time is < old time, update record
         if($score === null){
            //insert new record
            $new_score = new Score;

            $new_score->user_id = $user_id;
            $new_score->time_taken = $request->time; 
            $new_score->level = $request->level;
    
            $new_score->save();

            $msg = "new record inserted";


         }else if($score->time_taken > $request->time){
            //update record
            $score->time_taken = $request->time;

            $score->save();

            $msg = "updated record";
         }else{
            //do nothing
            $msg = "nothing done";
         }   

         return response()->json([
            'msg' => $msg,
     
        ]);

    }

}
