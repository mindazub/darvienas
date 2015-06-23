@extends('layout.app')

@section('content')


<h1>Articles created:</h1>
<strong><hr></strong>
@if($articles->count())

@foreach($articles as $article)

<p>{{ str_limit($article->title, 50, '[Read more ...]') }}</p>



<div>
<form url="/articles/" action="/articles/{{ $article->id  }}" method="POST">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
</form>
</div>

<hr/>

@endforeach

@else

<h1>No Articles, please seed: vagrant ssh, php artisan db:seed</h1>

@endif

        <ul class="pagination-sm">
			{!! $articles->render() !!}
		</ul>

@stop