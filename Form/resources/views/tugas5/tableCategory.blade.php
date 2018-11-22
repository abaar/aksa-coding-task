<!DOCTYPE html>
<html>
<head>
	<title>Aksa Academy - Tugas 4</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<style>
		table {
		    font-family: arial, sans-serif;
		    border-collapse: collapse;
		    width: 100%;
		}

		td, th {
		    border: 1px solid #dddddd;
		    text-align: left;
		    padding: 8px;
		}

		tr:nth-child(even) {
		    background-color: #dddddd;
		}
	</style>
</head>
<body>
	<div class="container-fluid" style="margin-top:1%">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div>
					<h1>Product's Data!</h1>
					<br>
				</div>
				<div class="col-md-offset-10" style="float:right; margin-bottom: 2%" >
					<button class="btn btn-primary" onclick="redirect('{{Route('tugas5.show.form')}}')">Back</button>
				</div>
				<div style="margin-top:2%">
					<table>
						<tr>
							<th>Category Id</th>
							<th>Name</th>
							<th>Instance Of Article</th>
						</tr>
						@foreach ($datas as $data)
							<tr>
								<td>
									{{ $data->id }}
								</td>
								<td>
									{{ $data->name }}
								</td>
								<td>
									{{ sizeof($data->articles) }}
								</td>
							</tr>
						@endforeach
					</table>
				</div>
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