@extends ('layouts.app')

@section ('content')
	<h1>{{$post->title}}</h1>
	<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
	<hr>
	<div>
		{!! $post->content !!}
	</div>
	<hr>
	<b-button-group>
		<b-button variant="primary" href="/posts/{{$post->id}}/edit">Edit</b-button>
		{!! Form::open(['url' => '/posts/'.$post->id, 'method' => 'POST', 'class' => 'pull-right']) !!}
			{{Form::hidden('_method', 'DELETE')}}
			<b-button type="submit" variant="danger">Delete</b-button>
		{!! Form::close() !!}
	</b-button-group>
@endsection
