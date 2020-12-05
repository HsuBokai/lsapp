<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
        <title>{{config('app.name', 'LSAPP')}}</title>
    </head>
    <body>
	<div class="container">
		@yield ('content')
	</div>
	<div id="app">
		<b-container>
			<b-alert show variant="danger" dismissible>
				Default alert
			</b-alert>
			<b-button variant="success">
				@{{ message }}
			</b-button>
		</b-container>
	</div>
	<script src="{{mix('js/app.js')}}"></script>
    </body>
</html>
