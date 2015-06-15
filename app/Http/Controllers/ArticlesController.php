<?php namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use App\Article;
use App\Tag;
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
		$latest = Article::latest()->first();

		return view('articles.index', compact('articles', 'latest'));
	}

	
	public function create() {	

		$tags = Tag::lists('name', 'id');

		return view('articles.create', compact('tags'));
	}

	public function show(Article $article) {

		// $article = Article::findOrFail($id);

		// dd($article->published_at);
		// if(is_null($article)) {
		// 	abort(404);
		// }

				$latest = Article::latest()->first();

		return view('articles.show', compact('article', 'latest'));
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
		$this->createArticle($request);
		// dd($request->input('tag_list'));
		// dd($article->tags());

		// dd($article);
		// $article = new Article($request->all());
		// Auth::user()->articles()->save($article);
		// ARBA
		// Auth::user()->articles()->create($request->all());
		// \Session::flash('flash_message', 'Your article has been created!');
		
		\Flash::success('Your article has been created!');
		
		return redirect('articles');

	}


	public function edit(Article $article) {

		// $article = Article::findOrFail($id);
		$tags = Tag::lists('name', 'id');


		return view('articles.edit', compact('article', 'tags'));
	}
	
	
	public function update(Article $article, ArticleRequest $request) {

		// $article = Article::findOrFail($id);
		// $tags = Tag::lists('name', 'id');

		\Flash::info('Your article has been updated!');
		
		$article->update($request->all());

		$this->syncTags($article, $request->input('tag_list'));

		return redirect('articles');
	}
	
	
	
	public function destroy(Article $article, $id) {
		
		// dd($request);

		$article->delete();

		\Flash::alert('You deleted the selected article!');

		return redirect('articles');

	}

	
	
	public function syncTags(Article $article, array $tags) {
		$article->tags()->sync($tags);
	}
	
	
	
	public function createArticle(ArticleRequest $request){
		
		$article = Auth::user()->articles()->create($request->all());		
		
		// tada vietoj to naudojam pagalbini metoda synctags $article->tags()->attach($request->input('tag_list'));
		$this->syncTags($article, $request->input('tag_list'));

		return $article;
	}
	
	
	
	
	

}
