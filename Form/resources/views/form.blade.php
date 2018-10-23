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
							<input type="text" name="nama" class="form-control" id="idnama" placeholder="Masukan namamu">
						</div>

					</div>
					<div class="form-group row">
						<label for="idtptlahir" class="col-md-4">Tempat Lahir</label>
						<div class="col-md-8">
							<input type="text" name="tempatlahir" class="form-control" id="idtptlahir" placeholder="Masukan tempat lahirmu">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4" for="idtgllahir">Tanggal Lahir</label>
						<div class="col-md-8">
							<input type="date" name="tanggallahir" class="form-control" id="idtgllahir">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4">Gender</label>
						<div class="form-check col-md-2">
							<input type="radio" name="radio" id="idradioL" value="L" class="form-check-input">
							<label class="form-check-label" for="idradioL">L</label>
						</div>
						<div class="form-check col-md-2">
							<input type="radio" name="radio" id="idradioP" value="P" class="form-check-input">
							<label class="form-check-label" for="idradioP">P</label>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4" for="idemail">E-mail</label>
						<div class="col-md-8">
							<input type="email" name="email" class="form-control" id="idemail">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4" for="idalamat">Alamat</label>
						<div class="col-md-8">
							<textarea name="alamat" class="form-control" rows="3" id="idalamat"></textarea>
						</div>
					</div>
					
					<button type="submit" class="btn btn-primary col-md-12">Kirim</button>
				</form>				
			</div>
		</div>		
	</div>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
</body>
</html>