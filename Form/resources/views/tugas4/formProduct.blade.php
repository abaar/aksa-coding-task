<!DOCTYPE html>
<html>
<head>
	<title>Aksa Academy - Tugas 4</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid" style="margin-top:1%">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div>
					<h1>Product Registering Form</h1>
					<br>
				</div>

				<form method="get" action="{{ Route('tugas4.input.form') }}">
					
					@if($errors->isNotEmpty())
						<div class="alert alert-warning">
							@foreach($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</div>
					@endif



					<div class="form-group row">
						<label for='category_id' class="col-md-4">Category</label>
						<div class="col-md-8">
							<select name="category_id" id="category_id" class="col-md-12">
								@foreach ($categories as $category)
									<option value="{{ $category->id }}">{{ $category->name }}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for='name' class="col-md-4">Name</label>
						<div class="col-md-8">
							<input type="text" name="name" class="form-control" id="name" placeholder="Product's name" value="{{ old('name') }}">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-md-4" for="desc">Description</label>
						<div class="col-md-8">
							<textarea name="desc" class="form-control" rows="3" id="desc">{{ old('desc') }}</textarea>
						</div>
					</div>

					<div class="form-group row">
						<label for='price' class="col-md-4">Price</label>
						<div class="col-md-8">
							<input type="text" name="price" class="form-control" id="price" placeholder="Product's price" value="{{ old('price') }}">
						</div>
					</div>
					<button type="submit" class="btn btn-primary col-md-12">Kirim</button>
				</form>	
				<button class="btn btn-primary col-md-12" style="margin-top:1%" onclick="redirect('{{ Route('tugas4.show.product') }}')">Data</button>		
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