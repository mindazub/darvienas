<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Carbon\Carbon;

class ArticlesController extends Controller {

	
	public function index() {
		
		$articles = Article::latest()->get();
		// order_by('published_at', 'desc')

		return view('articles.index', compact('articles'));
		

	}
	
	public function create() {
		
		return view('articles.create');
	}

	public function show($id) {
		

		$article = Article::findOrFail($id);
		// dd($article);

		// if(is_null($article)) {
		// 	abort(404);
		// }
		
		return view('articles.show', compact('article'));

	}


	public function store() {
	
		$input = Request::all();
		$input['published_at'] = Carbon::now();

		// $input = Request::get('body');
		// var_dump($input);
		// $article = new Article;
		// $article->title = $input['title'];
		// $article->body = $input['body'];
		// $article->save();

		// var_dump(Request::all());
		var_dump($input);


		// Article::create(Request::all());
		Article::create($input);



		return redirect('articles');

	}


	
	
	
	
	

}
