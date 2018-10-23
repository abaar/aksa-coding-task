<!DOCTYPE html>
<html>
<head>
	<title>Aksa Academy - Tugas 2</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid" style="margin-top:1%">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<form method="POST" action="{{route('show.post')}}">
					<div class="form-group row">
						<label for="idnama" class="col-md-4">Nama</label>
						<div class="col-md-8">
							<input type="text" name="nama" class="form-control" id="idnama" value="{{$nama}}" disabled>
						</div>

					</div>
					<div class="form-group row">
						<label for="idtptlahir" class="col-md-4">Tempat Lahir</label>
						<div class="col-md-8">
							<input type="text" name="tempatlahir" class="form-control" id="idtptlahir" value="{{$tempatlahir}}" disabled>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4" for="idtgllahir">Tanggal Lahir</label>
						<div class="col-md-8">
							<input type="date" name="tanggallahir" class="form-control" id="idtgllahir" value="{{$tanggallahir}}" disabled>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4">Gender</label>
						<div class="form-check col-md-2">
							@if($gender=='L')
							<input type="radio" name="radio" id="idradioL" value="L" class="form-check-input" checked disabled>
							@else
							<input type="radio" name="radio" id="idradioL" value="L" class="form-check-input" disabled>
							@endif
							<label class="form-check-label" for="idradioL" checked>L</label>
						</div>
						<div class="form-check col-md-2">
							@if($gender=='P')
							<input type="radio" name="radio" id="idradioP" value="P" class="form-check-input" checked disabled>
							@else
							<input type="radio" name="radio" id="idradioP" value="P" class="form-check-input" disabled>
							@endif
							<label class="form-check-label" for="idradioP">P</label>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4" for="idemail">E-mail</label>
						<div class="col-md-8">
							<input type="email" name="email" class="form-control" id="idemail" value="{{$email}}" disabled>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4" for="idalamat">Alamat</label>
						<div class="col-md-8">
							<textarea name="alamat" class="form-control" rows="3" id="idalamat" disabled>{{$alamat}}</textarea>
						</div>
					</div>
					
					<button type="submit" class="btn btn-primary col-md-12" disabled>Kirim</button>

				</form>
				<button style="margin-top: 5px; background-color: green;" class="btn btn-primary col-md-12" onclick=redirect('{{route('home')}}')>Back</button>	
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