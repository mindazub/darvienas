<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller {

    public function index()
    {
        $articles = Article::paginate(5);

        return view('admin.index', compact('articles', $articles));
	}

}
