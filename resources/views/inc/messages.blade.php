@if (count($errors) > 0)
	@foreach ($errors->all() as $error)
		<b-alert show variant="danger">
			{{$error}}
		</b-alert>
	@endforeach
@endif

@if (session('success'))
	<b-alert show>
		{{session('success')}}
	</b-alert>
@endif

@if (session('error'))
	<b-alert show variant="danger">
		{{session('error')}}
	</b-alert>
@endif
