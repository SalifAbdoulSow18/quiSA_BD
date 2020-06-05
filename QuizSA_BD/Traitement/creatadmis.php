<?php
if (isset($_POST['submit'])) {     
  if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['login']) && !empty($_POST['pass']) && !empty($_POST['confpass'])) {
    //Uploade les images des users!!
     $format=['image/png','image/jpg','image/jpeg'];
    if (in_array($_FILES['file']['type'], $format)) {
    $array=explode('.', $_FILES['file']['name']);
    $filename=date('YmdHis').".".$array[sizeof($array)-1];
    if (move_uploaded_file($_FILES['file']['tmp_name'], './images/UsersImages/'.$filename)) {
    $photo= './images/UsersImages/'.$filename;
    }
    }
      
      $nom=$_POST['nom'];
      $prenom=$_POST['prenom'];
      $login=$_POST['login'];
      $password=$_POST['pass'];
      $confpass=$_POST['confpass'];
      $photo=$photo;

      addUser($login,$password,$confpass,$prenom,$nom,$photo);
  }

  else{
       echo "Your message has not been sent. Please complete all required!!!";
  }
}
?>




<form method="POST" class=" h-100 mx-auto" enctype="multipart/form-data" id="formulaire">
<div class="row mx-auto h-100 bg-white contenant_ca">
		<div class="w-25 h-100 avatar2">
			<img class="w-75 h-50 ml-2  mt-3 float-left rounded-circle" src="./images/avatar.jpg" id="output">
		</div>
		<div class="w-75 h-100 float-right formulaire2">
  			<div class="form-group">
    			<label for="text">Prenom</label>
    			<input type="text" class="form-control" id="prenom" name="prenom" required>
  			</div>
  			<div class="form-group">
    			<label for="text">Nom</label>
    			<input type="text" class="form-control" id="nom" name="nom" required>
  			</div>
  			<div class="form-group">
    			<label for="text">Login</label>
    			<input type="text" class="form-control" id="login" name="login" required>
  			</div>
  			<div class="form-group">
    			<label for="pwd">Password</label>
    			<input type="password" class="form-control" id="pass" name="pass" required>
  			</div>
  			<div class="form-group">
    			<label for="pwd">Confirm Password</label>
    			<input type="password" class="form-control" id="confpass" name="confpass" required>
  			</div>
  			<div class="bas">
  				<label class="bg-primary text-white" for="file">choisir un fichier</label>
				<input type="file" name="file" id="file" class="bg-primary text-white col-6" accept=".png, .jpeg, .jpg" onchange="loadFile(event)">
			</div>
  				<button type="submit" name="submit" class="btn btn-default bg-primary text-white col-6 mt-2 font-weight-bold">Creer mon compte</button>
		</div>
</div>
</form>

<script>
var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
};
</script>
