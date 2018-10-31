<!DOCTYPE html>
<html>
<head>
	@include('tugas2.shared.partial.meta')
	<title>SB Admin 2 - Bootstrap Admin Theme</title>
	@include('tugas2.shared.partial.stylesheet')
</head>
<body>
	<div id="wrapper">
		@include('tugas2.shared.partial.navbar')
		@yield('realpage')
	</div>

	@include('tugas2.shared.partial.jquery')
	@yield('additional-js')
</body>
</html>