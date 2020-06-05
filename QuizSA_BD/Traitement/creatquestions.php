<div class="row mx-auto h-100 bg-light quiz">
	<form method="POST" class="h-100 w-100" action="" id="formulaire3">
		<div class="h-25 w-100 mt-1 form-group question">
			<label class="h-100 mt-5 font-weight-bold col-3">Questions</label>
			<textarea  name="quiz" class="h-100 col-8 float-right form-control" id="quiz"></textarea>
		</div>
		<div class="form-group w-100 nbre">
			<label class="h-100 font-weight-bold float-left col-3">Score</label>
			<input type="number" class="float-left col-3 ml-5 form-control" id="number" name="number" min="1" max="15">
		</div>
		<div class="form-group w-100 typ">
			<label class="h-100 font-weight-bold float-left col-3">Type</label>
			<select id="choise" class="form-control h-75 float-left col-7" name="choise">
				<option>Donner le type de reponse</option>
				<option value="choix texte">Choix texte</option>
				<option value="choix simple">Choix simple</option>
				<option value="choix multiple">Choix multiple</option>
			</select>
			<a href="" class="float-right h-100 col-1" id="plus"><img class="h-75 float-right" src="./images/plus.png"></a>
		</div>
		<div class="w-100 bg-secondary form-group ajout" id="ajout">
						
		</div>
		<div class="mt-2 save">
			<input type="submit" name="submit" class="bg-info float-right text-light" value="Enregistrer">
		</div>
	</form>
</div>