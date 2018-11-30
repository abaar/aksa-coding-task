<!DOCTYPE html>
<html>
<head>
	<title>Aksa Academy - Tugas 6</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid" style="margin-top:1%">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div>
					<h1>Article Registering Form</h1>
					<br>
				</div>

				<form method="get" action="{{ Route('tugas6.input.form') }}">
					
					@if($errors->isNotEmpty())
						<div class="alert alert-warning">
							@foreach($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</div>
					@endif




					@foreach ($categories as $category)
					<div class="form-group row">
						<label for='category_id' class="col-md-4">Category</label>
						<div class="col-md-8">
							<input type="checkbox" name="category[]" value="{{ $category->id }}">{{ $category->name }}<br>
						</div>
					</div>
					@endforeach


					<div class="form-group row">
						<label for='title' class="col-md-4">Title</label>
						<div class="col-md-8">
							<input type="text" name="title" class="form-control" id="title" placeholder="Articles's title" value="{{ old('title') }}">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-md-4" for="body">Body</label>
						<div class="col-md-8">
							<textarea name="body" class="form-control" rows="3" id="body">{{ old('body') }}</textarea>
						</div>
					</div>

					<button type="submit" class="btn btn-primary col-md-12">Kirim</button>
				</form>	
				<button class="btn btn-primary col-md-12" style="margin-top:1%" onclick="redirect('{{ Route('tugas6.show.article') }}')">Article</button>		
				<button class="btn btn-primary col-md-12" style="margin-top:1%" onclick="redirect('{{ Route('tugas6.show.category') }}')">Category</button>
				@guest
				<button class="btn btn-primary col-md-12" onclick="redirect('{{ Route('login') }}')" style="margin-top: 1%">Login</button>
				<button class="btn btn-primary col-md-12" onclick="redirect('{{ Route('register') }}')" style="margin-top: 1%">Register</button>
				@else
				<button class="btn btn-primary col-md-12" onclick="redirect('{{ Route('tugas6.logout') }}')" style="margin-top: 1%">{{ Auth::user()->name }} - Logout</button>
				@endguest

			</div>
		</div>		
	</div>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		function redirect(to){
			window.location.href=to;
		}

	</script>
</body>
</html>