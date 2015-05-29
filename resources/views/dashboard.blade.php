@extends('app')

@section('content')

<div class="container ">
	<div class="row text-center">
		<div class="col-sm-12">
			<h1>Dashboard</h1>
			<h3>Choose a task</h3>
			<hr>
		</div>
	</div>

	<div class="row text-center">
		<div class="col-sm-12">
			<a href="{{ url('/articles/create') }} " class="btn btn-primary">Create New Article</a>
		</div>
	</div>
	@foreach($articles as $article)
		<div class="row text-center">
			<div class="col-sm-4">

				<a href="{{ url('/articles/' . $article->id .'/edit') }}" class="btn btn-primary">Edit</a>
			</div>

				<div class="col-sm-4">
					{!! Form::open(['route' => ['articles.destroy', $article->id], 'method' => 'delete']) !!}
																	
					{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
										
					{!! Form::close() !!}
				</div>

				<div class="col-sm-4">
					<a href=" {{ url('/articles', $article->id) }}">{{ $article->title }}</a>
				</div>		
		</div>
	@endforeach
</div>

@endsection