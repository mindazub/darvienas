<?php namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use App\Article;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

// use Request;
use Carbon\Carbon;

class ArticlesController extends Controller {



	public function __construct(){
		$this->middleware('auth', ['only'=>'create']);
	}
	
	
	
	public function index() {

		// return \Auth::user();
		
		$articles = Article::latest('published_at')->published()->paginate(5);
		// $articles = Article::latest('published_at')->unpublished()->paginate(5);
		// order_by('published_at', 'desc')
		return view('articles.index', compact('articles'));
	}

	
	public function create() {		
		return view('articles.create');
	}

	public function show(Article $article) {

		// $article = Article::findOrFail($id);


		// dd($article->published_at);
		// if(is_null($article)) {
		// 	abort(404);
		// }
		return view('articles.show', compact('article'));
	}

	public function store(ArticleRequest $request) {
	// public function store(Request $request) {

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

		// $this->validate($request. ['title'=>'required', 'body'=>'required']);
		

		// Auth::user()->save(new Article($request->all()));

		$article = new Article($request->all());
		
		Auth::user()->articles()->save($article);
		// ARBA
		// Auth::user()->articles()->create($request->all());
		//

		// \Session::flash('flash_message', 'Your article has been created!');
		
		\Flash::success('Your article has been created!');
		
		return redirect('articles');

	}


	public function edit(Article $article) {

		// $article = Article::findOrFail($id);

		return view('articles.edit', compact('article'));
	}
	
	
	public function update(Article $article, ArticleRequest $request) {

		// $article = Article::findOrFail($id);

		\Flash::info('Your article has been updated!');
		
		$article->update($request->all());

		return redirect('articles');
	}
	
	
	
	
	
	
	

}
