@extends('layouts.appadmin')

@section('content')

<br>
<h4>Edit challenge</h4>
<br>

{!! Form::open(['action' => ['App\Http\Controllers\ChallengeController@update',$challenge->id], 'method' => 'PUT']) !!}
    <div class="form-group">   

        {{Form::label('phrase', 'Phrase')}}
        {{Form::text('phrase',$challenge->phrase,['class'=> 'form-control'])}}
        {{Form::label('hint', 'Hint')}}
        {{Form::text('hint',$challenge->hint,['class'=> 'form-control'])}}
        {{Form::label('level', 'Difficulty level')}}
        {{Form::select('level',['1' => 'Level 1', '2' => 'Level 2', '3' => 'Level 3'],$challenge->level,['class'=> 'form-control'])}}
        <br>
                {{Form::submit('Save',['class'=>'btn btn-sm btn-success'])}}
            <input type="button" onclick="location.href='/admin/challenges';" value="Cancel" class="btn btn-warning btn-sm" />
{!! Form::close() !!}

{!! Form::open(['action' => ['App\Http\Controllers\ChallengeController@destroy',$challenge->id], 'method'=> 'POST','class'=>'pull-right']) !!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-sm btn-danger'])}}
{!! Form::close() !!}

</div>



@endsection