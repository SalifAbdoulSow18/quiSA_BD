<?php
if (isset($_POST['submit'])) {
	if (!(empty($_POST['login'])) && !(empty($_POST['password']))) {
		$erreur="";
		$login=$_POST['login'];
		$password=$_POST['password'];
		 $result=getUserConnexion($login, $password);

     	if($result!== null)
     	{
        	$_SESSION['userConnect']=$result;
        	if ($result['profil']=="admin") {
         		header('Location:index.php?lien=acceuil');
        	} 
        	else{
        		header('Location:index.php?lien=interface_joueur');
        	}
     	}
    	else{
         $erreur= '<div id="error_message" class="alert alert-danger mx-auto erreur" role="alert">
                    <strong>Login ou Mot de Passe Incorrect!!!</strong>
                </div>';
     	}		
	}
}

?>


<div class="col-9 mx-auto contenaire">
	<div class="row first">
		<h4 class="col mx-auto"><center>WOULD YOU LIKE TO TEST QUIZ SAS?</center></h4>
	</div>
	<div class="row">
		<?php 
				if (isset($erreur)) {
					echo "$erreur";
				}
			?>
			<form method="POST" class="" id="formulaire">
				<input class="rounded m-4 text" type="text" name="login" placeholder="Login" id="login" required>
				<input class="rounded m-4 text2" type="password" name="password" placeholder="Password" id="pass" required>
				<input type="submit" name="submit" value="Se connecter" class="rounded submit">
				<a style="text-decoration: none;" href="index.php?lien=creatjoueur"> <h3> S'inscrire</h3></a>
			</form>
     </div>
	
</div>