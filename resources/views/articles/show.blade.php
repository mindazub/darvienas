@extends('layout.app')

@section('content')

<h2>{{ $article->title }} </h2>

<p>{{ $article->body }}</p>

<h4>Two approaches to show </h4>

<ul>
	<li> href = "" articles/article->id </li>
	<li> action ArticlesController @ show $article->id</li>
	<li> url /articles, $article->id</li>
</ul>

@stop