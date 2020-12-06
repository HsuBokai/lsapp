@extends ('layouts.app')

@section ('content')
	<h1>Posts</h1>
	@if (count($posts) > 0)
		<ul class="list-group">
		@foreach ($posts as $post)
			<li class="list-group-item">
			<div class="well">
				<h3>{{$post->title}}</h3>
				<small>Written on {{$post->created_at}}</small>
			</div>
			</li>
		@endforeach
		</ul>
	@else
		<p>No posts found</p>
	@endif
@endsection
