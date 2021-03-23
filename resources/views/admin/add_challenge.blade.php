@extends('layouts.appadmin')

@section('content')
<br>
<h4>New challenge</h4>
<br>
{!! Form::open(['action' => 'App\Http\Controllers\ChallengeController@store', 'method' => 'POST']) !!}
    <div class="form-group">   

        {{Form::label('phrase', 'Phrase')}}
        {{Form::text('phrase','',['class'=> 'form-control','placeholder'=> 'Challenge phrase'])}}
        {{Form::label('hint', 'Hint')}}
        {{Form::text('hint','',['class'=> 'form-control','placeholder'=> 'Give a hint'])}}
        {{Form::label('level', 'Difficulty level')}}
        {{Form::select('level',['1' => 'Level 1', '2' => 'Level 2', '3' => 'Level 3'],'',['class'=> 'form-control'])}}
        <br>
        {{Form::submit('Create',['class'=>'btn btn-sm btn-success'])}}
        </button>&nbsp;<input type="button" onclick="location.href='/admin/challenges';" value="Cancel" class="btn btn-warning btn-sm" />
    </div>
{!! Form::close() !!}



@endsection