<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Tag;

class TagsController extends Controller {

	
	public function show(Tag $tag){
		
		
		// dd($articles = $tag->articles);

		$articles = $tag->articles()->published()->get();

		return view('tags.index', compact('articles', $articles));
	}
	
	

}
