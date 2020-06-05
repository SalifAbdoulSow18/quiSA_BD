 const name=document.getElementById("prenom");
 const name=document.getElementById("nom");
 const name=document.getElementById("login");
 const name=document.getElementById("pass");
 const name=document.getElementById("confpass");

 const form=document.getElementById('formulaire');
 const errorElement=document.getElementById('mistake');

 form.addEventListener('submit',(0))=>{
 	let messages=[];
 	if (name.value===''|| name.value==null){
 		messages.push('champ obligatoire');
 	}
 	if (messages.length>0) {
 		e.preventDefault();
 		errorElement.innerText=messages.join(',')
 	}
 }