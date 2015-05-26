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
	@foreach($articles as $article)
		<div class="row">
			<div class="col-sm-12">
				<ul class="list-unstyled">
					<li>
						<a href="{{ url('/articles/$article->id/edit') }}" class="btn btn-primary">Edit</a>
					</li>

					<li>
						{!! Form::open(['route' => ['articles.destroy', $article->id], 'method' => 'delete']) !!}
							
						{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

						{!! Form::close() !!}
					</li>

					<li>
						<a href=" {{ url('/articles', $article->id) }}">{{ $article->title }}</a>
					</li>
				</ul>
			</div>
		</div>
	@endforeach
</div>

@endsection