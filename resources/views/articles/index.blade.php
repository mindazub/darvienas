@extends('layout.app')

@section('content')


<div class="container">
		
	@if(count($articles))
		@foreach($articles as $article)

			<strong><h2> 
			<a href="/articles/{{ $article->id }}">{{ $article->title}}</a>
			</h2></strong>
			<h4>Created by {{ $article->user->name }}<small>&nbsp&nbsppublished on&nbsp&nbsp{{ $article->published_at }}</small></h4> 

				<p>Created:{{ $article->created_at }}</p>
				<p>Published:{{ $article->published_at }}</p>
				
				<div>
					{{ str_limit($article->body, 100, ' [ Read more... ]') }}
				</div>


				
				
		@endforeach


		<!-- <div class="text-center"> -->
		<ul class="pagination-sm">
			{!! $articles->render() !!}
		</ul>
			

		<!-- </div> -->
		

	@endif

</div>

@stop






@section('footer')

<small>The small footer</small>

@stop
