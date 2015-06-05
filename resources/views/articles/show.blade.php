@extends('layout.app')

@section('content')

<h2>{{ $article->title }} </h2>

<p>{{ $article->body }}</p>

<h4>Two approaches to show </h4>
<br/>
<a href="{{ route('articles.edit', [ $article->id	]) }}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp&nbspEdit&nbsp&nbsp|</a>
<a href="#"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp&nbspDelete</a>

<hr/>
<ul>
	<li> href = "" articles/article->id </li>
	<li> action ArticlesController @ show $article->id</li>
	<li> url /articles, $article->id</li>
</ul>

@stop