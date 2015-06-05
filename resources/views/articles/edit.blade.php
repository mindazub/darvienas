@extends('layout.app')

@section('content')


<div class="container">
	<div class="row">
		<h1>
			Edit the Article: {!! $article->title !!}
		</h1>

		{!! Form::model($article ,['method'=>'PATCH', 'action'=>['ArticlesController@update', $article->id]]) !!}

			@include('articles.form', ['submitButtonText'=>'Update Article'])

		{!! Form::close() !!}

	@include ('errors.list')


	</div>
</div>

@stop