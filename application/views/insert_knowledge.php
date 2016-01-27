<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Beet Knowledge Repository</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  	<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  	<style>
		.jumbotron {
	      	background-color: white;
	      	color: #863B65;
	      	padding: 100px 25px;
	      	font-family: Montserrat, sans-serif;
	  	}

	  	.btn-default {
	  		color: #fff;
			background-color: #863B65;
			border-color: #863B65;
	  	}

	  	.btn-default:hover {
	  		color: #fff;
			background-color: #9F4A90;
			border-color: #9F4A90;
	  	}

	  	p {
	  		color: #73776C;
	  	}
	</style> 	
</head>

<div class="jumbotron text-center">
	  	<h1>BEET</h1> 
	  	<p>Input Data</p1> 
	  	<form class="form-group" action="<?=base_url('index.php/welcome/insert_data')?>" method="post">
	    	<input class="form-control" id="name" name="name" placeholder="Source Name" type="text" required>
	    	<input class="form-control" id="name" name="url" placeholder="Source Link" type="text" required>
	    	<input class="form-control" id="name" name="date" placeholder="Date Created" type="date" required>
	    	<input class="form-control" id="name" name="desc" placeholder="Description" type="text" required><br><br>
	    	<input type="submit" value="Save Data">
	  	</form>
	</div>

</html>