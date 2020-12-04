@extends('templates.master')

@section('title')
Rock Paper Scissors
@endsection

@section('content')

<h2>Instructions</h2>

<ul>

    <li>Player A randomly throws either rock, paper, or scissors.</li>

    <li>It is a tie if both player A and player B throw the same thing.</li>

    <li>Otherwise, Rock beats Scissors, Scissors beats Paper, and Paper beats Rock.</li>

</ul>


<form method='POST' action='/play'>

    <label>
        <input type='radio' name='move' value='rock'>
        Rock
    </label>

    <label>
        <input type='radio' name='move' value='paper'>
        Paper
    </label>

    <label>
        <input type='radio' name='move' value='scissors'>
        Scissors
    </label>


    <button type='submit'>Throw</button>

    @if($app->errorsExist())
    <ul class='error alert alert-danger'>
        @foreach($app->errors() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif


</form>

@if($results)

<br>

<p>You choose {{$results['move']}}</p>

<p>The computer choose {{$results['computerchoice']}}</p>

<p>{{$results['win']}}</p>

@endif

<a href='/history'>Game history...</a>


@endsection