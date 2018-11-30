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

				<form method="get" action="{{ Route('tugas6.save.article',['id'=>$article->id]) }}">
					
					@if($errors->isNotEmpty())
						<div class="alert alert-warning">
							@foreach($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</div>
					@endif





					<div class="form-group row">
						<label for='category_id' class="col-md-4">Category</label>
						@for($i=0 ; $i<count($categories);$i++)
						<div class="col-md-8">


								@if($categories[$i]->id == $article->category[$i]->id)
									<input type="checkbox" name="category[]" checked value="{{ $categories[$i]->id }}">{{ $categories[$i]->name }}<br>
								@else
									<input type="checkbox" name="category[]" value="{{ $categories[$i]->id }}">{{ $categories[$i]->name }}<br>
								@endif
						</div>
						@endfor
					</div>
					


					<div class="form-group row">
						<label for='title' class="col-md-4">Title</label>
						<div class="col-md-8">
							<input type="text" name="title" class="form-control" id="title" placeholder="Articles's title" value="{{ $article->title }}">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-md-4" for="body">Body</label>
						<div class="col-md-8">
							<textarea name="body" class="form-control" rows="3" id="body">{{ $article->body }}</textarea>
						</div>
					</div>
					{{-- @endforeach --}}
					<button type="submit" class="btn btn-primary col-md-12">Simpan</button>

				</form>	
				<button class="btn btn-warning col-md-12" style="margin-top: 1%" onclick="redirect('{{ Route('tugas6.show.form') }}')">Batal</button>

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