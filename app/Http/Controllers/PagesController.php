<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	
	public function about() {

		// $name = 'Mindaugas Azubalis';
		
		$data = [];

		$data['first']='Mindaugas';
		$data['last']= 'Azubalis';

		return view('pages.about', $data);
	}
	
	

}
