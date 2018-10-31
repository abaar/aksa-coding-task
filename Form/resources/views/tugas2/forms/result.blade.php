@extends('tugas2.layout')

@section('realpage')
<div class="container-fluid" style="padding-top:3%">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<form method="POST" action="{{route('tugas2.show.post')}}">
					<div class="form-group row">
						<label for="idnama" class="col-md-4">Nama</label>
						<div class="col-md-8">
							@if(isset($nama))
								<input type="text" name="nama" class="form-control" id="idnama" value="{{$nama}}" disabled>
							@else
								<input type="text" name="nama" class="form-control" id="idnama" value="nama" disabled>
							@endif
						</div>

					</div>
					<div class="form-group row">
						<label for="idtptlahir" class="col-md-4">Tempat Lahir</label>
						<div class="col-md-8">
							@if(isset($tempatlahir))
								<input type="text" name="tempatlahir" class="form-control" id="idtptlahir" value="{{$tempatlahir}}" disabled>
							@else
								<input type="text" name="tempatlahir" class="form-control" id="idtptlahir" value="Tempat Lahir" disabled>
							@endif
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4" for="idtgllahir">Tanggal Lahir</label>
						<div class="col-md-8">
							@if(isset($tanggallahir))
								<input type="date" name="tanggallahir" class="form-control" id="idtgllahir" value="{{$tanggallahir}}" disabled>
							@else
								<input type="date" name="tanggallahir" class="form-control" id="idtgllahir" disabled>
							@endif
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4">Gender</label>
						@if(isset($gender))
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
						@else
							<div class="form-check col-md-2">
								<input type="radio" name="radio" id="idradioL" value="L" class="form-check-input" disabled>
								<label class="form-check-label" for="idradioL" checked>L</label>
							</div>
							<div class="form-check col-md-2">
								<input type="radio" name="radio" id="idradioP" value="P" class="form-check-input" disabled>
								<label class="form-check-label" for="idradioP">P</label>
							</div>
						@endif
					</div>
					<div class="form-group row">
						<label class="col-md-4" for="idemail">E-mail</label>
						<div class="col-md-8">
							@if(isset($email))
								<input type="email" name="email" class="form-control" id="idemail" value="{{$email}}" disabled>
							@else
								<input type="email" name="email" class="form-control" id="idemail" value="email[at]email.com" disabled>
							@endif
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4" for="idalamat">Alamat</label>
						<div class="col-md-8">
							@if(isset($alamat))
								<textarea name="alamat" class="form-control" rows="3" id="idalamat" disabled>{{$alamat}}</textarea>
							@else
								<textarea name="alamat" class="form-control" rows="3" id="idalamat" disabled>Textarea</textarea>
							@endif
						</div>
					</div>
					
					<button type="submit" class="btn btn-primary col-md-12" disabled>Kirim</button>

				</form>
				<button style="margin-top: 5px; background-color: green;" class="btn btn-primary col-md-12" onclick=redirect('{{ Route('tugas2.dashboard.dashboard' )}}')>Back</button>	
			</div>
		</div>		
	</div>
@endsection

@section('additional-js')
	<script type="text/javascript">
		function redirect(to){
			window.location.href=to;
		}
	</script>
@endsection
