<!DOCTYPE html>
<html>
<head>
	@include('tugas3.shared.partial.meta')
	<title>SB Admin 2 - Bootstrap Admin Theme</title>
	@include('tugas3.shared.partial.stylesheet')
</head>
<body>
	<div id="wrapper">
		@include('tugas3.shared.partial.navbar')
		@yield('realpage')
	</div>

	@include('tugas3.shared.partial.jquery')
	@yield('additional-js')
</body>
</html>