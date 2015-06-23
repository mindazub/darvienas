@extends('layout.app')


@section('content')


<div class="container">
<div class="row">
<h1>Write a New Article: </h1>
	
	{!! Form::model($article = new \App\Article, ['url'=>'articles']) !!}

		@include('articles.form', ['submitButtonText'=>'Add Article'])

	{!! Form::close() !!}

	@include('errors.list')

</div>
</div>

@stop


