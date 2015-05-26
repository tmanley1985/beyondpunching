@extends('app')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Edit: {{ $article->title }}</h1>
			</div>

			<div class="row">
				<div class="col-sm-12">
					{!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id ]]) !!}

					<div class="form-group">
						{!! Form::label('title', 'Title:') !!}
						{!! Form::text('title', null, ['class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('body', 'Body:') !!}
						{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::submit('Edit Article', ['class' => 'btn btn-primary form-control']) !!}
					</div>

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

@endsection