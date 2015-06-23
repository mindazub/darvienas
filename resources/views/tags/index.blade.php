@extends('layout.app')

@section('content')

<div class="container">

<div class="container">
		
	@if(count($articles))
		@foreach($articles as $article)

			<strong><h2> 
			<a href="/articles/{{ $article->id }}">{{ $article->title}}</a>
			</h2></strong>
			<h4>Created by {{ $article->user->name }}<small>&nbsp&nbsppublished on&nbsp&nbsp{{ $article->published_at }}</small></h4> 
<!-- <p ><a style="color: red;" href="{{ route('articles.destroy', $article->id) }}">
<i class="glyphicon glyphicon-remove-circle"></i>
Delete
</a>
</p>
<a href="{{ route('articles.destroy', $article->id) }}" ><button class="btn btn-sm btn-danger">Delete</button></a>
 -->
@if(!$article->tags->isEmpty())
	<p><strong>Tags:</strong></p>
	@foreach($article->tags as $tag)
		|&nbsp{{ $tag->name }}&nbsp</li>
	@endforeach
	<br/>
@endif

				<p>Created:{{ $article->created_at }}</p>
				<p>Published:{{ $article->published_at }}</p>
				
				<div>
					{{ str_limit($article->body, 100, ' [ Read more... ]') }}
				</div>


				
				
		@endforeach


		
		
		

	@endif

</div>

@stop






@section('footer')

<small>The small footer</small>

@stop
