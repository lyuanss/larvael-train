@extends('layout')

@section('content')
    <h1>
        {{$card->title}}

    </h1>
    <ul>
	  @foreach($card->notes as $note)
    		<div>
    			{{$note->body}}
    		</div>
    	@endforeach
    </ul>
@stop