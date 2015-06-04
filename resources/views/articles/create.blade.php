@extends('layout.app')


@section('content')


<div class="container">

<h1>Write a New Article: </h1>
	
	<div class="row">		
		{!! Form::open(['url'=>'articles']) !!}
			<div class="form-group">
			    {!! Form::label('title', 'Title:') !!}
			    <br/>
			    {!! Form::text('title', null, array('placeholder'=>'Title goes here ...')) !!}
			</div>
			
			<div class="form-group">
			    {!! Form::label('Body:') !!}
			    <br/>
			    {!! Form::textarea('body', null, array('placeholder'=>'Body goes here...', 'size'=>'30x4')) !!}
			</div>
			
			
			<div class="form-group">
			{!! Form::submit('Add Article', ['class'=>'btn btn-sm btn-success']) !!}
			</div>
		{!! Form::close() !!}
	</div>


</div>



@stop