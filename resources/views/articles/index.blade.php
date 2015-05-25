@extends('app');

@section('content')

	@foreach($articles as $article)

		<ul>
			<li>{{ $article->title }}</li>
		</ul>

	@endforeach
@endsection