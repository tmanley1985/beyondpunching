<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Auth;
use Request;

use App\Article;

class ArticlesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($user_id)
	{

		$articles = Article::all();

		return view('articles.index', compact('articles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('articles.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$article = new Article(Request::all());
		$article['published_at'] = Carbon::now();

		Auth::user()->articles()->save($article);

		return redirect('articles');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($user_id, $article_id)
	{
		$authenticated_user = Auth::user()->id;

		if( $authenticated_user != $user_id){ return redirect('/');}

		$article = Auth::user()->articles()->findorFail($article_id);

		return view('articles.show', compact('article'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($user_id, $article_id)
	{
		$article = Article::findorFail($id);

		return view('articles.edit', compact('article'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$article = Article::findorFail($id);

		$input = Request::all();

		$article->update($input);

		return redirect('dashboard');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$article = Article::find($id);

		$article->delete();

		return redirect('dashboard');
	}

	public function dashboard(){
		
		$articles = Article::all();

		return view('dashboard', compact('articles'));
	}

}
