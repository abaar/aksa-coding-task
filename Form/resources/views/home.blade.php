<!DOCTYPE html>
<html>
<head>
	<title>Aksa Academy - Tugas 2</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2 col-md-offset-5 row" style="margin-top: 45vh; padding: 0;">
{{-- 				<div class="col-md-5">
					<button class="col-md-12 btn btn-primary" onclick=redirect('{{ Route('tugas1.home') }}')>Tugas1</button>
				</div>
				<div class="col-md-5 col-md-offset-1">
					<button class="col-md-12 btn btn-primary" onclick=redirect('{{ Route('tugas2.dashboard.dashboard') }}')>Tugas2</button>
				</div>
				<div class="col-md-5 col-md-offset-1">
					<button class="col-md-12 btn btn-primary" onclick=redirect('{{ Route('tugas3.dashboard') }}')>Tugas3</button>
				</div>
				<div class="col-md-5 col-md-offset-1">
					<button class="col-md-12 btn btn-primary" onclick=redirect('{{ Route('tugas4.show.form') }}')>Tugas4</button>
				</div>
			</div> --}}

				<div class="form-group row">
					<label for="tugas" class="col-md-4">Tugas ke-</label>
					<div>
						<select name='tugas' id='tugas' class="col-md-8">
							<option value="{{ Route('tugas1.home') }}">Tugas1</option>
							<option value="{{ Route('tugas2.dashboard.dashboard') }}">Tugas2</option>
							<option value="{{ Route('tugas3.dashboard') }}">Tugas3</option>
							<option value="{{ Route('tugas4.show.form') }}">Tugas4</option>
						</select>
					</div>
					<button class="btn btn-primary col-md-12" onclick="go()">Go</button>	
				</div>				
				


		</div>
	</div>
	<script type="text/javascript">
		function redirect(to){
			window.location.href=to;
		}
		function go(){
			var select = document.getElementById('tugas').value;
			redirect(select);
		}
	</script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
</body>
</html>