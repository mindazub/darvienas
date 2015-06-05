<?php namespace App\Http\Controllers;

use App\Http\Requests\CreateArticleRequest;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Carbon\Carbon;

class ArticlesController extends Controller {

	
	public function index() {
		
		$articles = Article::latest('published_at')->published()->paginate(5);
		// $articles = Article::latest('published_at')->unpublished()->paginate(5);
		// order_by('published_at', 'desc')

		return view('articles.index', compact('articles'));
		

	}


	/*
	*
	*
	*/

	
	public function create() {
		
		return view('articles.create');
	}

	public function show($id) {
		

		$article = Article::findOrFail($id);
		
		// dd($article->published_at);

		// if(is_null($article)) {
		// 	abort(404);
		// }
		
		return view('articles.show', compact('article'));

	}


	public function store(CreateArticleRequest $request) {
	
		// $input = Request::all();

		// $input['published_at'] = Carbon::now();

		// $input = Request::get('body');
		// var_dump($input);
		// $article = new Article;
		// $article->title = $input['title'];
		// $article->body = $input['body'];
		// $article->save();

		// var_dump(Request::all());
		// var_dump($input);

		// Article::create(Request::all());

		// Article::create($input);
		// Article::create(Request::all());
		Article::create($request->all());



		return redirect('articles');

	}


	
	
	
	
	

}
