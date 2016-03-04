<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Thanks!</title>
	<link rel="stylesheet" href="">
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
		h1:hover{
			color:#AD88BF;
		}
		.email{
			/*background-color: #AD88BF;*/
		    /*width:150px;*/
		    /*height:30px;*/
			border: 1px solid whitesmoke;
			/*border-radius:10px;*/

		}
		.subscribe{
			display:block;
		 margin:auto;
		 margin-top:10px;
		 width: 170px;
		 height:40px;

		}
	</style>
</head>
<body>
	<div style="text-align: center; padding-top:300px;">
	   <a  href="{{ URL::to('/'); }}"><h1 style="font-size:70px; margin-top:-50px;">MISS MESH</h1></a>
	</div>

	<div style="text-align: center; font-size:70px; color: #707C83;">
		{{ $message }}
	</div>
</body>
</html>

