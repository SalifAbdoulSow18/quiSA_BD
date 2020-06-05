<?php
  is_connect();
?>

<div class="col-11 mx-auto mt-2 contenant_ij">
	<div class="row haut1">
    	<div class="col h-100 ques">
     		<img class="w-75 rounded-circle float-left" src="./images/avatar.jpg">
    	</div>
    	<div class="col-8">
      		<h4 class="font-weight-bold">SALIF SOW, VOUS POUVEZ<br> CREER ET PARAMETRER VOS QUESTIONS</h4> 
    	</div>
    	<div class="col deconnex">
      		<a href="index.php?statut=logout"><button class="btn btn-default bg-primary text-white font-weight-bold mt-3">Deconnexion</button></a>
   		</div>
	</div>
  <div class="row mx-auto mt-3 milieu_ij">
    <div class="col-3 h-100 float-left gauche">
        <ul class="h-75 mx-auto mt-5">
            <li class="bg-secondary mt-3">
              <a href="index.php?lien=acceuil&page=listequestion">Liste Questions</a>
            </li>
            <li class="bg-secondary mt-3">
              <a href="index.php?lien=acceuil&page=creatadmis">Creer Admis</a>
            </li>
            <li class="bg-secondary mt-3">
              <a href="index.php?lien=acceuil&page=listejoueurs">Liste Joueurs</a>
            </li>
            <li class="bg-secondary mt-3">
              <a href="index.php?lien=acceuil&page=creatquestons">Creer Question</a>
            </li>
            <li class="bg-secondary mt-3">
              <a href="index.php?lien=acceuil&page=dashboard">Dashboard</a>
            </li>
        </ul>
    </div>
    <div class="col-9 h-100 bg-info float-right droite">
         <?php
          if (isset($_GET['page'])) {
            switch ($_GET['page']) {
              case 'creatadmis':
                require_once("creatadmis.php");
                break;
              case 'listequestion':
                require_once("listequestion.php");
                break;
              case 'listejoueurs':
                require_once("listejoueurs.php");
                break;
              case 'creatquestons':
                require_once("creatquestions.php");
                break; 
              case 'dashboard':
                require_once("dashboard.php");
                break;           
            }
          }
        ?>
    </div>
  </div>
</div>