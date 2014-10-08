@extends('default')

@section('body')
    
    {{ Form::open(array('url' => 'login', 'method' => 'post')) }}
	   
	    {{ Form::label('id', 'Votre fucking username killer') }}
		{{ Form::text('id') }}

		{{ Form::submit('Ready for kill ?') }}

	{{ Form::close() }}
@stop