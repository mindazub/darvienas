@extends('layout.app')

@section('content')


<div class="container">
		
	@if(count($articles))
		@foreach($articles as $article)

			<strong><h2> 
			<a href="/articles/{{ $article->id }}">{{ $article->title}}</a>
			</h2></strong>

				<p>Created:{{ $article->created_at }}</p>
				<!-- <p>Published:{{ $article->published_at }}</p> -->
				<p>{{ $article->body }}</p>


				
				
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
