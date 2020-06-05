<?php
  is_connect();
?>

<div class="col-11 mx-auto mt-2 contenant_ij">
	<div class="row haut1">
    	<div class="col h-100 ques">
     		<img class="w-75 rounded-circle" src="./images/avatar.jpg" style="float: left;">
    	</div>
    	<div class="col-8">
      		<h4 class="font-weight-bold">Salif SOW<br>WELCOME TO THE PLATEFORM QUIZ SAS</h4> 
    	</div>
    	<div class="col deconnex" >
      		<a href="index.php?statut=logout"><button class="btn btn-default w-100 h-50 bg-primary text-white font-weight-bold mt-3">Deconnexion</button></a>
   		</div>
	</div>
	<div class="row bg-white mx-auto mt-3 milieu_ij">
		<div class="col-3 h-100 gauche" style="float: left;">
			<button class="btn btn-default w-50 font-weight-bold top_score float-left">top score</button>
			<button class="btn btn-default w-50 font-weight-bold my_score float-right">my score</button>
		</div>
		<div class="col-9 h-100 droite" style="float: right;">
			<form method="POST">
				<div class="col-10 bg-secondary mx-auto font-weight-bold mt-3 rounded shadow-Default shadow
						 textarea">
					<label>Question 1/nbr de question</label><br><br>
					<label>Quels sont les langages de la programmation?</label>
				</div>
				<div class="mt-2 point">
					<input class="font-weight-bold" type="text" name="point" placeholder="3pts">
				</div>
				<div class="col-10 bg-secondary mx-auto mt-3 reponse">
					
				</div>
				<div class="mx-auto suiv">
				<button class="btn btn-default bg-secondary h-100 float-left text-white font-weight-bold">Precedent</button>
				<button class="btn btn-default bg-primary h-100 float-right text-white font-weight-bold">Suivant</button>
				</div>
			</form>
		</div>
	</div>
</div>