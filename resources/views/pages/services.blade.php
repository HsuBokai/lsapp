@extends('layouts.app')

@section('content')
	<h1>{{$title}}</h1>
	@if (count($services) > 0)
		<ul>
			@foreach ($services as $serv)
				<li>{{$serv}}</li>
			@endforeach
		</ul>
	@endif
@endsection
