@extends('layouts.app')

@section('content')

<br>
<h4>Play</h4>
<br>
<div class="row">
    <div class="col-lg-6">
        
        <?php include 'svg/hangman.svg'; ?>
    </div>
    <div class="col-lg-6">
        <h4>Time: <span id="time"></span></h4>
        <h5>Level:{{$challenge->level}}</h5>
        <h6>Hint:{{$challenge->hint}}</h6>

        <!-- Hidden values to be used by JS -->
        <input type="hidden" id="answer" value="{{$challenge->phrase}}">
        <input type="hidden" id="level" value="{{$challenge->level}}">
        <input type="hidden" id="page" value="play">

        <!-- Display buttons for the characters in the challenge phrase -->
        @foreach ((str_split($challenge->phrase)) as $char)
            @if($char == " ")
                &nbsp;
            @else
                <button id="letter{{$loop->index}}" class="btn btn-outline-success letter">?</button>
            @endif
        @endforeach
   
        <br><br><br><br>

        <!-- Display keyboard -->
        @foreach ($letters as $letter)
            <button  class="btn btn-primary keypad">{{$letter}}</button>
        @endforeach

        <br><br>

        <!-- Show Win or Loose -->
        <div id="result"></div>

        <br><br>

        <!-- Play again option after result -->
        <div style="display:none" id="play_again">
            <h4>Play again</h4>
            <button onclick="window.location.href='/play/1'" class="btn btn-lg btn-success">Level 1</button>
            <button onclick="window.location.href='/play/2'" class="btn btn-lg btn-warning">Level 2</button>
            <button onclick="window.location.href='/play/3'" class="btn btn-lg btn-danger">Level 3</button>
        </div>
    </div>

</div>
<script>

</script>
@endsection