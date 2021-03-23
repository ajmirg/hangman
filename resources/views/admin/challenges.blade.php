@extends('layouts.appadmin')

@section('content')
<br>
<h4>Challenges</h4>
<input type="button" onclick="location.href='/admin/challenges/create';" value="Add new" class="btn btn-primary btn-sm" />

<br>
@foreach ($challenges as $challenge)
    
    <a href="/admin/challenges/{{$challenge->id}}/edit"><span class="badge bg-success">Level {{$challenge->level}}</span>&nbsp;{{$challenge->phrase}}</a>
    <br>

@endforeach

@endsection