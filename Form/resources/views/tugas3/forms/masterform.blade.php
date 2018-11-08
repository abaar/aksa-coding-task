@extends('tugas3.layout')

@section('realpage')
		<div class="container-fluid" style="padding-top:0%">
		<div class="row">
		<div class="col-md-8 col-md-offset-4">
				<h2>Form</h2>
			</div>
			<div class="col-md-4 col-md-offset-4">
				<form method="POST" action="@yield('action')">
					@csrf
					@yield('method')

					@if($errors->isNotEmpty())
						<div class="alert alert-warning">
							@foreach($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</div>
					@endif


					<div class="form-group row">
						<label for="idnama" class="col-md-4">Nama</label>
						<div class="col-md-8">
							<input type="text" name="nama" class="form-control" id="idnama" placeholder="Masukan namamu" value="{{ old('nama') }}">
						</div>

					</div>
					<div class="form-group row">
						<label class="col-md-4">Gender</label>
						<div class="form-check col-md-2">
							<input type="radio" name="gender" id="idradioL" value="L" class="form-check-input">
							<label class="form-check-label" for="idradioL">L</label>
						</div>
						<div class="form-check col-md-2">
							<input type="radio" name="gender" id="idradioP" value="P" class="form-check-input">
							<label class="form-check-label" for="idradioP">P</label>
						</div>
					</div>
					<div class="form-group row">
						<label for="idtptlahir" class="col-md-4">Tempat Lahir</label>
						<div class="col-md-8">
							<input type="text" name="tempatlahir" class="form-control" id="idtptlahir" placeholder="Masukan tempat lahirmu" value="{{ old('tempatlahir') }}">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4" for="idtgllahir">Tanggal Lahir</label>
						<div class="col-md-8">
							<input type="date" name="tanggallahir" class="form-control" id="idtgllahir" value="{{ old('tanggallahir') }}">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4" for="idemail">E-mail</label>
						<div class="col-md-8">
							<input type="email" name="email" class="form-control" id="idemail" value="{{ old('email') }}">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4" for="idalamat">Alamat</label>
						<div class="col-md-8">
							<textarea name="alamat" class="form-control" rows="3" id="idalamat">{{ old('alamat') }}</textarea>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4" for="idMotto">Motto</label>
						<div class="col-md-8">
							<textarea name="motto" class="form-control" rows="3" id="idmotto">{{ old('motto') }}</textarea>
						</div>
					</div>
					<button type="submit" class="btn btn-primary col-md-12">Kirim</button>
				</form>				
			</div>
		</div>		
	</div>
@endsection