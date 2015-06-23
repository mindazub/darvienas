@extends('layout.app')

@section('content')

<h2>{{ $article->title }} </h2>
<h4>Created by {{ $article->user->name }}<small>&nbsp&nbsppublished on&nbsp&nbsp{{ $article->published_at }}</small></h4> 

<p>{{ $article->body }}</p>

@unless($article->tags->isEmpty())
<h5>Tags:</h5>
	<ul>
		@foreach($article->tags as $tag)
			<li>{{ $tag->name }}</li>
		@endforeach
	</ul>
@endunless
<br/>


<a href="{{ route('articles.edit', [ $article->id	]) }}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp&nbspEdit&nbsp&nbsp|</a>
<a href="{{ route('articles.destroy', [ $article->id ]) }}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp&nbspDelete</a>
   <p></p>
<form url="/articles/" action="/articles/{{ $article->id  }}" method="POST">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
</form>



<hr/>

<!-- <h4>Two approaches to show </h4>
<br/>
<ul>
	<li> href = "" articles/article->id </li>
	<li> action ArticlesController @ show $article->id</li>
	<li> url /articles, $article->id</li>
</ul> -->

@stop