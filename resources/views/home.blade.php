@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
  
        <div class="col-md-8">
            <br><br>
            <div class="card">
                <div class="card-header"><h1>Hangman game</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <img width="30%" src="{{asset('images/hangman.jpg')}}">
                   <br>
                    <button onclick="window.location.href='/play/1'" class="btn btn-lg btn-success">Play Level 1</button>
                    <button onclick="window.location.href='/play/2'" class="btn btn-lg btn-warning">Play Level 2</button>
                    <button onclick="window.location.href='/play/3'" class="btn btn-lg btn-danger">Play Level 3</button>

                </div>
                <div class="card-footer">
                    <button onclick="window.location.href='/scoreboard'" class="btn btn-lg btn-primary">Scoreboard</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
