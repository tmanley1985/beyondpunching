@extends('app')

@section('content')

	<div class="container">

		<div class="row">
			<div class="col-sm-12">
				<h1>Write a New Article</h1>
				<hr/>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				{!! Form::open(['url' => 'articles']) !!}

				<div class="form-group">
					{!! Form::label('title', 'Title:') !!}
					{!! Form::text('title', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('body', 'Body:') !!}
					{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}
				</div>

				{!! Form::close() !!}
			</div>
		</div>
	</div>

@endsection