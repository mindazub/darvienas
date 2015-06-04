<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	
	public function about() {		

		$people = ['Mark', 'Jonh', 'Me', 'Marty'];

		// return view('pages.about', compact($people));
		return view('pages.about')->with('people', $people);
	}
	
	
		public function contact() {
			return view('pages.contact');
		}
		
			

}
