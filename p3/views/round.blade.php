@extends('templates.master')

@section('title')
Round Details
@endsection

@section('content')



<h2>Round Details</h2>

<ul>

    <li>You choose {{$round['move']}}</li>

    <li>The computer choose {{$round['computer']}}</li>

    <li>{{$round['win']}}</li>

    <li>Time: {{$round['time']}}</li>

</ul>



@endsection