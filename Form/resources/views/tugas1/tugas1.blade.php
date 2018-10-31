<!DOCTYPE html>
<html>
<head>
	<title>Aksa Academy - Tugas 2</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 row" style="margin-top: 45vh">
				<div class="col-md-5">
					<button class="col-md-12 btn btn-primary" onclick=redirect('{{route('tugas1.form.post')}}') style="background-color: red">POST</button>
				</div>
				<div class="col-md-5 col-md-offset-1">
					<button class="col-md-12 btn btn-primary" onclick=redirect('{{route('tugas1.form.put')}}') style="background-color: red">PUT</button>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function redirect(to){
			window.location.href=to;
		}
	</script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
</body>
</html>