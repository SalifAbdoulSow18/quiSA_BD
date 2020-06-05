<!DOCTYPE html>
<html>
<head>
	<title>QUIZ SAS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container-fluid">						
		<div class="row haut">
    		<div class="col h-100 ques">
     			<img src="images/question.png" class="float-left">
    		</div>
    			<div class="col-6">
      				<h1 class="mt-3">QUIZ SAS</h1>
    			</div>
    				<div class="col h-100 ques">
      					<img class="float-right" src="images/question.png">
    				</div>
		</div>
			<div class="row conteneur">
				<?php
				session_start();
					require_once("Fonction/fonction.php");
					if (isset($_GET['lien'])) {
						switch ($_GET['lien']) {
						 	case 'creatjoueur':
						 		require_once("Traitement/creatjoueur.php");
						 		break;
						 	case 'acceuil':
						 		require_once("Traitement/acceuil.php");
						 		break;
						 	case 'interface_joueur':
						 		require_once("Traitement/interface_joueur.php");
						 		break;						
						}
					}else{
						if (isset($_GET['statut']) && $_GET['statut']==="logout" ) {
							deconnection();
						}
					require_once("Traitement/connexion.php");	
					}
				?>
			</div>
				<div class="row foot">
					<h5 class="col-6 mx-auto">@Copyright SAS 2020</h5>
				</div>
	</div>
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script src="JS/script.js"></script>
</body>
</html>