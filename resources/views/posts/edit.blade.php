@extends ('layouts.app')

@section ('content')
	<h1>Edit Post</h1>
	{!! Form::open(['url' => '/posts/'.$post->id, 'method' => 'POST']) !!}
		<div class="form-group">
			{{Form::label('title', 'Title')}}
			{{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
		</div>
		<div class="form-group">
			{{Form::label('content', 'Content')}}
			{{Form::textarea('content', $post->content, ['class' => 'form-control', 'placeholder' => 'Content Text'])}}
		</div>
		{{Form::hidden('_method', 'PUT')}}
		<b-button type="submit" variant="primary">Submit</b-button>
	{!! Form::close() !!}
@endsection
