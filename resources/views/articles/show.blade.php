@extends('app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h2>{{ $article->title }}</h2>
			<article>
				{{ $article->body }}
			</article>
			

		</div>
	</div>
</div>

@endsection