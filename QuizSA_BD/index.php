<!DOCTYPE html>
<html>
<head>
	<title>QUIZ SAS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<div class="container-fluid">						
		<div class="row haut">
    		<div class="col h-100 ques">
     			<img src="./images/question.png" style="float: left;">
    		</div>
    			<div class="col-6">
      				<h1 class="mt-3">QUIZ SAS</h1>
    			</div>
    				<div class="col h-100 ques">
      					<img style="float: right;" src="./images/question.png">
    				</div>
		</div>
			<div class="row conteneur">
				<?php
					require_once("./Traitement/connexion.php");
				?>
			</div>
				<div class="row foot">
					<h5>@Copyright SAS 2020</h5>
				</div>
	</div>
	
	
</body>
</html>