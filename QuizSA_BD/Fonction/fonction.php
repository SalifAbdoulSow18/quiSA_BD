<?php
// Ouverture d'une connexion a la base de donnees quiz_sa_base
function getConnexion(){
    $host ="localhost";
    $db = "quiz_sa_base";
    $user ="root";
    $psswd ="";
    try{
    $conn = new PDO("mysql:host=$host;dbname=$db",$user,$psswd);
    return $conn;
    
    }catch(PDOException $pe){
        return 'connection error '.$pe->getMessage();
       die();
    }
}

//Connexion des users pour avoir acces aux differentes pages!!!
    function getUserConnexion($login,$password){
    try{
    $db = getConnexion();
    
     $query = $db->prepare("SELECT * FROM users WHERE login=:login AND password=:password");
     $query->bindParam("login", $login, PDO::PARAM_STR);
     $query->bindParam("password", $password, PDO::PARAM_STR);
     
     $query->execute();

       if($query->rowCount() > 0){
        
         $user = $query -> fetch(PDO::FETCH_ASSOC);
         $profil = $user['profil'];    
         return $user;
    }
    else{
         return null;
    }

  
    }catch(PDOException $e){
       exit($e -> getMessage());
    }         
    }


    /*------------------------------------------------------------------------------------
inserer les infos utilisateur dans la BDD(inscription ou ajout d'un admin)
---------------------------------------------------------------------------------------*/
function addUser($login,$password,$confpass,$prenom,$nom,$photo)
{   
    $db = getConnexion();
    $result = 0;
    if(isset($_SESSION['userConnect'])){ //c'est un admin qui ajoute un autre admin
        $profil = 'admin';
  
    }
  else{ //c'est un joueur qui s'inscrit
     $profil = 'joueur';
  
  }
  if ($password === $confpass) {
    $c = $db->prepare("SELECT login FROM users WHERE login= :login");
    $c->execute([
    'login' => $login
    ]);
    $result = $c->rowCount();

        if ($result == 0) {
   
try{
 $db = getConnexion();
$query = $db -> prepare("INSERT INTO users(login, password, prenom, nom, profil,statut,score,photo) VALUES(:login, :password, :prenom, :nom, :profil, :statut, :score, :photo)");
      $statut=0;
      $score=0;
        $query -> bindParam(":login",$login,PDO::PARAM_STR);
        $query -> bindParam(":password",$password,PDO::PARAM_STR);
        $query -> bindParam(":prenom",$prenom,PDO::PARAM_STR);
        $query -> bindParam(":nom",$nom,PDO::PARAM_STR);
        $query -> bindParam(":profil",$profil,PDO::PARAM_STR);
        $query -> bindParam(":statut",$statut,PDO::PARAM_INT);
        $query -> bindParam(":score",$score,PDO::PARAM_INT);
        $query -> bindParam(":photo",$photo,PDO::PARAM_STR);
        $query -> execute();
          header('Location: index.php');
   }catch(PDOException $e){
exit($e -> getMessage());
}
    } else {
        echo "Veuillez changer votre login, il a un deja un proprietaire!!!";
}    
                
    } else {
        echo "les mots de passes ne sont pas identiques!!!";
        }         
}

/*------------------------------------------------------------------------------------
Fonction de Destruction des données utlisateurs
---------------------------------------------------------------------------------------*/
function deconnection(){
    //Destruction des données utlisateur
    unset( $_SESSION['userConnect']);
    session_destroy();
 }

/*------------------------------------------------------------------------------------
Fonction si users existe
---------------------------------------------------------------------------------------*/
 function is_connect(){
     if(!isset($_SESSION['userConnect'])){
         header("Location:index.php");
     }
 }
?>
