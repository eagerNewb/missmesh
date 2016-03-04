<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-md-12">
				<p><strong>From :</strong>{{ $name }}</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-md-12">
				<p>{{ $email }} </p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-md-12">
				<p><strong>Subject:</strong> {{ $subj }}</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-md-12">
			  <p><strong>Message:</strong></p><br>
			   {{ $body }}
			</div>
		</div>
	</div>
</body>
</html>