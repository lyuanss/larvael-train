@extends('layout')

@section('content')

    <h1>
        All card
    </h1>
    <div>
        <li>
    	@foreach($cards as $card)
    		<div>
    			<a href="cards/{{$card->id}}">{{$card->title}}</a>
    		</div>
    	@endforeach
        </li>
    </div>
@stop