@extends('layouts.app')

@section('content')

<h2>Scoreboard</h2>

<h4><span class="badge bg-danger">Level 1</span></h4>
    
@foreach ($scores_level_1 as $score)

<h5><span class="badge bg-success">{{$score->user->username}}</span> <span class="badge bg-primary">{{$score->time_taken}}</span> <span class="badge bg-warning">{{date_format($score->updated_at,"d M Y")}}</span></h5>

@endforeach

<h4><span class="badge bg-danger">Level 2</span></h4>

@foreach ($scores_level_2 as $score)

    <h5><span class="badge bg-success">{{$score->user->username}}</span> <span class="badge bg-primary">{{$score->time_taken}}</span> <span class="badge bg-warning">{{date_format($score->updated_at,"d M Y")}}</span></h5>
    
@endforeach

<h4><span class="badge bg-danger">Level 3</span></h4>

@foreach ($scores_level_3 as $score)

<h5><span class="badge bg-success">{{$score->user->username}}</span> <span class="badge bg-primary">{{$score->time_taken}}</span> <span class="badge bg-warning">{{date_format($score->updated_at,"d M Y")}}</span></h5>
    
@endforeach

@endsection