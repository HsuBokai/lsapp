@extends ('layouts.app')

@section ('content')
	<h1>Create Post</h1>
	{!! Form::open(['url' => '/posts', 'method' => 'POST']) !!}
		<div class="form-group">
			{{Form::label('title', 'Title')}}
			{{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
		</div>
		<div class="form-group">
			{{Form::label('content', 'Content')}}
			{{Form::textarea('content', '', ['class' => 'form-control', 'placeholder' => 'Content Text'])}}
		</div>
		<b-button type="submit" variant="primary">Submit</b-button>
	{!! Form::close() !!}
@endsection
