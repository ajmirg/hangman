<?php

namespace App\Http\Controllers;
use App\Models\Challenge;

use Illuminate\Http\Request;


class ChallengeController extends Controller
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
        $challenges = Challenge::all();

        return view('admin.challenges')->with('challenges',$challenges);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.add_challenge');

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
        $this->validate($request,[
            'phrase' => 'required',
            'hint' => 'required',
            'level' => 'required'
        ]);

        
        $chanllenge = new Challenge;
        $chanllenge->phrase = $request ->input('phrase');
        $chanllenge->hint = $request ->input('hint');
        $chanllenge->level = $request ->input('level');

        $chanllenge->save();

        return redirect('/admin/challenges');
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
        $challenge = Challenge::find($id);

        return view('admin.edit_challenge')->with('challenge',$challenge);
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
        $this->validate($request,[
            'phrase' => 'required',
            'hint' => 'required',
            'level' => 'required',
            
        ]);

        $challenge = Challenge::find($id);
        $challenge->phrase = $request ->input('phrase');
        $challenge->hint = $request ->input('hint');
        $challenge->level = $request ->input('level');

        $challenge->save();

        return redirect('/admin/challenges');
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
        $challenge = Challenge::find($id);
        $challenge->delete();
        return redirect('admin/challenges');

    }

     /**
     * Play.
     *
     * @return \Illuminate\Http\Response
     */
    public function play($level)
    {
        //get a random challenge for this level
        $challenge = Challenge::where('level',$level)->first();
        $letters = array("a","b","c","d","e","f","g","h","i","j","k",'l',"m","n","o","p","q","r","s","t","u","v","w","x","y","z");

        return view('play')->with('challenge',$challenge)->with('letters',$letters);

    }
}
