<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;

use Request;

use App\Article;

class PagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// returns the home page

		return view('home');
	}

	public function dashboard(){

		$articles = Article::all();

		return view('dashboard', compact('articles'));
	}

}
