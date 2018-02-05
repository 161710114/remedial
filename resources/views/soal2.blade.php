<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Halo Eloquent</title>
		<!-- CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<style type="text/css"> body { padding-top:50px; } </style>
	</head>
	<body class="container">
		<div class="col-sm-8 col-sm-offset-2">
		<center><h2><b> One to One</b></h2></center>
			@foreach ($wali as $temp)
				<h4>
					<li>Nama Wali : <strong>{{$temp->nama}}</strong></li>
					Mahasiswa :
					<li>{{$temp->mahasiswa->nama}}</li>
				</h4>
				<hr/>
			@endforeach
		</div>
	</body>
</html>