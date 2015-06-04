@extends('layout.app')

@section('content')


<div class="container">
		
	@if(count($articles))
		@foreach($articles as $article)

			<strong><h2> 
			<a href="/articles/{{ $article->id }}">{{ $article->title}}</a>
			</h2></strong>

				<p>{{ $article->body }}</p>

				
				
		@endforeach

	@endif

</div>

@stop


@section('footer')

<small>The small footer</small>

@stop
