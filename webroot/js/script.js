//Fonction qui valide les données fournies par l'utilisateur lors de son inscription
// * Reçoit en paramètre le formulaire des donneés complétée par l'utilisateur
function validerFormulaire(formulaire){
	var temp=0;

	if(nom.value.length<2){
		document.getElementById("form_nom").innerHTML="   Nom n'est pas valide "; 
		temp+=1;
	}
	else document.getElementById("form_nom").innerHTML=""; 

	if (prenom.value.length<2){
		document.getElementById("form_prenom").innerHTML="   Prénom non valide"; 
		temp+=1;
	}
	else document.getElementById("form_prenom").innerHTML=""; 
	
	if (!email.value){
		document.getElementById("form_email").innerHTML="   E-mail non valide"; 
		temp+=1;
	} 
	else document.getElementById("form_email").innerHTML=""; 

	if (email2.value!=email.value){
		document.getElementById("form_email2").innerHTML="   Confirmez votre E-mail"; 
		temp+=1;
	} 
	else document.getElementById("form_email2").innerHTML="";  

	if (mot_de_passe.value.length<8){
		document.getElementById("form_mdp").innerHTML="   8 caractères minimum"; 
		temp+=1;
	} 
	else document.getElementById("form_mdp").innerHTML=""; 
	
	if (mot_de_passe2.value!=mot_de_passe.value){
		document.getElementById("form_mdp2").innerHTML="   Mot de passe non valide"; 
		temp+=1;
	} 
	else document.getElementById("form_mdp2").innerHTML=""; 

	if(temp!=0){
		return false
	}
	else return true;

}

//Fonction qui vérifie la validité des nouvelles données du compte utilisateur
function modification_compte(formulaire){
	var temp=0;

	if(nom.value.length<2){
		document.getElementById("form_nom").innerHTML="   Le nom n'est pas valide "; 
		temp+=1;

	}
	else document.getElementById("form_nom").innerHTML=""; 

	if (prenom.value.length<2){
		document.getElementById("form_prenom").innerHTML="   Le prénom n'est pas valide"; 
		temp+=1;
	}
	else document.getElementById("form_prenom").innerHTML=""; 

	if(temp!=0){
		return false
	}
	else return true;


}