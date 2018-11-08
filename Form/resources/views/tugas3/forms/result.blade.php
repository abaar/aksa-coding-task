@extends('tugas3.layout')

@section('realpage')
<div class="container-fluid" style="padding-top:0%">
		<div class="row">
			<div class="col-md-8 col-md-offset-4">
				<h2>Result</h2>
			</div>
			<div class="col-md-4 col-md-offset-4">
				<form method="POST" action="{{route('tugas3.show.post')}}">
					<div class="form-group row">
						<label for="idnama" class="col-md-4">Nama</label>
						<div class="col-md-8">
							
								<input type="text" name="nama" class="form-control" id="idnama" placeholder="Masukan namamu" disabled @isset($nama) value="{{ $nama }}" @endisset>
							
						</div>

					</div>
					<div class="form-group row">
						<label class="col-md-4">Gender</label>
						<div class="form-check col-md-2">
							@if(isset($gender))
								@if($gender=='L')
								<input type="radio" name="gender" id="idradioL" value="L" class="form-check-input" checked disabled>
								@else
								<input type="radio" name="gender" id="idradioL" value="L" class="form-check-input" disabled>
								@endif
							@else
								<input type="radio" name="gender" id="idradioL" value="L" class="form-check-input" disabled>
							@endif

							<label class="form-check-label" for="idradioL">L</label>
						</div>
						<div class="form-check col-md-2">
							@if(isset($gender))
								@if($gender=='P')
								<input type="radio" name="gender" id="idradioP" value="P" class="form-check-input" checked disabled>
								@else
								<input type="radio" name="gender" id="idradioP" value="P" class="form-check-input" disabled>
								@endif
							@else
							<input type="radio" name="gender" id="idradioP" value="P" class="form-check-input" disabled>
							@endif
							<label class="form-check-label" for="idradioP">P</label>
						</div>
					</div>
					<div class="form-group row">
						<label for="idtptlahir" class="col-md-4">Tempat Lahir</label>
						<div class="col-md-8">
							<input type="text" name="tempatlahir" class="form-control" id="idtptlahir" placeholder="Masukan tempat lahirmu" disabled @isset($tempatlahir) value="{{ $tempatlahir }}" @endisset>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4" for="idtgllahir">Tanggal Lahir</label>
						<div class="col-md-8">
							<input type="date" name="tanggallahir" class="form-control" id="idtgllahir" @isset($tanggallahir) value="{{ $tanggallahir }}" @endisset disabled>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4" for="idemail">E-mail</label>
						<div class="col-md-8">
							<input type="email" name="email" class="form-control" id="idemail" @isset($email) value="{{ $email }}" @endisset disabled>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4" for="idalamat">Alamat</label>
						<div class="col-md-8">
							<textarea name="alamat" class="form-control" rows="3" id="idalamat" disabled>
							@isset($alamat)
								{{ $alamat }}
							@endisset
							</textarea>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4" for="idMotto">Motto</label>
						<div class="col-md-8">
							<textarea name="motto" class="form-control" rows="3" id="idmotto" disabled>

							@isset($motto)
								{{ $motto }}
							@endisset

							</textarea>
						</div>
					</div>
					
					<button type="submit" class="btn btn-primary col-md-12" disabled>Kirim</button>

				</form>
				<button style="margin-top: 5px; background-color: green;" class="btn btn-primary col-md-12" onclick=redirect('{{ Route('tugas3.dashboard' )}}')>Back</button>	
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
