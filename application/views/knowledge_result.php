<?php
	$url = "http://localhost/progif-view/oprec-api.php";
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT, 4);
	$json = curl_exec($ch);
	if(!$json) {
	    echo curl_error($ch);
	}
	curl_close($ch);
	$arr = json_decode($json,TRUE);
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
	</style> 	
</head>

<div class="jumbotron text-center">
	<center><table class="table">
		<tr> 
			<th> File Name </th>
			<th> Url </th>
			<th> Description </th>
			<th> Creation Date </th>
			<th> Category </th>
		</tr>

		<?php 
		if ($result) {
			foreach ($result as $row) {
				echo "<tr>";
				echo "<td>".$row['source_name']."</td>";
				echo "<td>".$row['source_url']."</td>";
				echo "<td>".$row['source_desc']."</td>";
				echo "<td>".$row['creation_date']."</td>";
				echo "<td>".$row ['category']."</td>";
				echo "</tr>";
			}
		}  else {
			echo "Tidak ditemukan";
		}
		?>

	</table></center><br><br>
	<a href="<?=base_url('index.php/welcome/')?>" class="btn btn-default" role="button">Home</a>
</div>
</html>