@extends ('layouts.app')

@section ('content')
	<h1>{{$post->title}}</h1>
	<small>Written on {{$post->created_at}}</small>
	<hr>
	<div>
		{!! $post->content !!}
	</div>
	<hr>
	<b-button variant="primary" href="/posts/{{$post->id}}/edit">Edit</b-button>
@endsection
