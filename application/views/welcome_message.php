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
	  	body {
	      	font: 400 15px Lato, sans-serif;
	      	line-height: 1.8;
	      	color: #818181;
	  	}

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

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	<div class="jumbotron text-center">
	  	<h1>BEET</h1> 
	  	<p>Knowledge Repository</p1> 
	  	<form class="form-inline" action="<?=base_url('index.php/welcome/retrieve_data/source_desc')?>" method="post">
	    	<input type="text" name="keyword" class="form-control" size="50" placeholder="Insert description keyword you're searching for..." required>
	    	<input type="submit" value="Search"><br><br><br>
	    </form>
	    <form class="form-inline" action="<?=base_url('index.php/welcome/retrieve_data/category')?>" method="post">
	    	<input type="text" name="keyword" class="form-control" size="50" placeholder="Insert category you're searching for..." required>
	    	<input type="submit" value="Search"><br><br><br>
	    </form>
	    	<a href="<?=base_url('index.php/welcome/insert')?>" class="btn btn-default" role="button">Input Data</a>
	  	
	</div>
</body>

</html>