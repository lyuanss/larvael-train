@extends('layout')

@section('content')

    <h1>
        All card
    </h1>
    <div>
    	@foreach($cards as $card)
    		<div>
    			{{$card->title}}
    		</div>
    	@endforeach
    </div>
@stop