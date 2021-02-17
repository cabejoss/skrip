<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('assets/css/materialize.min.css')?>">
	<script src="<?=base_url('assets/js/jquery-3.5.1.min.js')?>"></script>
	<script src="<?=base_url('assets/js/materialize.min.js')?>"></script>
    <title>Document</title>
	<style>
		body{
			height:110vh;
		}
		h5{
			margin-top:50px;
		}
		.collapsible-body table {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		.collapsible-body table td, table th {
			border: 1px solid #ddd;
			padding: 8px;
			text-align:center;
		}

		.collapsible-body table tr:nth-child(even){background-color: #f2f2f2;}

		.collapsible-body table tr:hover {background-color: #ddd;}

		.collapsible-body table th {
			padding-top: 12px;
			padding-bottom: 12px;
			background-color: #4CAF50;
			color: white;
		}
		.btn{
			background-color: #4CAF50;
		}
		.btn:hover{
			background-color: #4CAF50;
		}
		nav, .nav-wrapper{
			background-color: #4CAF50;
		}
	</style>
</head>
<body style="overflow: hidden;">
	<div class="row">
		<div class="col s9 red" style="height: 100vh">
			
		</div>
		<div class="col s3 teal darken-4" style="height: 100vh; padding-top: 250px">
			<form action="<?=base_url('auth')?>" method="post" class="z-depth-3 col s12 white" style="padding: 1em">
		      <div class="row">
		      	<div class="col s12 center-align">
					<h6>MASUK APP</h6>
				</div>
		        <div class="input-field col s12">
		          <input id="username" type="text" class="validate">
		          <label for="username">Username</label>
		        </div>
		        <div class="input-field col s12">
		          <input id="password" type="password" class="validate">
		          <label for="password">Password</label>
		        </div>
		        <div class="col s12 center-align">
					<button type="submit" class="btn"> Masuk </button>
				</div>
		      </div>
		    </form>		
		</div>
	</div>
</body>
</html>