@extends('app')

@section('content')
	
	<div class= "container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Articles</h1>
			</div>
		</div>
	

	

	@foreach($articles as $article)

		<div class="row">
			<div class="col-sm-12">
				<article>
					<a href="{{ url('/articles', $article->id) }}">{{ $article->title }}</a></li>
				</article>
			</div>
		</div>
		
			

	@endforeach

</div>
@endsection