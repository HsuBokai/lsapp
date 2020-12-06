@extends ('layouts.app')

@section ('content')
	<h1>{{$post->title}}</h1>
	<small>Written on {{$post->created_at}}</small>
	<hr>
	<div>
		{!! $post->content !!}
	</div>
	<hr>
	<a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
@endsection
