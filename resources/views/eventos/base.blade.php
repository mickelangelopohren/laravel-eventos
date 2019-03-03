<!DOCTYPE html>
<html>
<head>	
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<script src="{{ asset('js/app.js') }}" defer></script>

	<title>
		@yield('titulo')
	</title>

</head>
<body>	
	<div class="container pt-4">
		
		@yield('conteudo')

	</div>
</div>
</body>
</html>

<script type="text/javascript">
	@yield('scripts')
</script>