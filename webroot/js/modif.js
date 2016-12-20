//Fonction qui vérifie la validité des nouvelles données du compte utilisateur
function modification_compte(formulaire){
	var temp=0;

	if(nom.value.length<2){
		document.getElementById("form_nom").innerHTML=" Le nom n'est pas valide "; 
		temp+=1;

	}
	else document.getElementById("form_nom").innerHTML=""; 

	if (prenom.value.length<2){
		document.getElementById("form_prenom").innerHTML=" Le prénom n'est pas valide"; 
		temp+=1;
	}
	else document.getElementById("form_prenom").innerHTML=""; 

	if(temp!=0){
		return false
	}
	else return true;


}

//Fonction qui vérifie la validité des champs lors de la suppression d'un comics par l'admin

function valider_droits(formulaire){
	var temp=0;

	if(user.value==0 ){
		document.getElementById("form_user").innerHTML=" Doit être un id "; 
		temp+=1;

	}
	else document.getElementById("form_user").innerHTML=""; 

	if (droits.value!=0 && droits.value!=1 || droits.value.length<1 ){
		document.getElementById("form_droits").innerHTML=" 0 ou 1 "; 
		temp+=1;
	}
	else document.getElementById("form_droits").innerHTML=""; 

	if(temp!=0){
		return false
	}
	else return true;


}

//Vérifie la validité des info données par un admin lors de l'ajout d'un nouveau comics
function valider_new_comic(formulaire){
	var temp=0;

	if(titre.value.length<5){
		document.getElementById("form_titre").innerHTML="   non valide "; 
		temp+=1;
	}
	else document.getElementById("form_titre").innerHTML=""; 

	if (tome.value>99 || tome.value<=0){
		document.getElementById("form_tome").innerHTML="   non valide"; 
		temp+=1;
	}
	else document.getElementById("form_tome").innerHTML=""; 
	
	if (!collection.value){
		document.getElementById("form_collection").innerHTML="   non valide"; 
		temp+=1;
	} 
	else document.getElementById("form_collection").innerHTML=""; 

	if (!cover.value){
		document.getElementById("form_cover").innerHTML="   non valide"; 
		temp+=1;
	} 
	else document.getElementById("form_cover").innerHTML="";  

	if (description.value.length<10){
		document.getElementById("form_description").innerHTML="   non valide "; 
		temp+=1;
	} 
	else document.getElementById("form_description").innerHTML=""; 
	
	if (!mots_cles.value.length){
		document.getElementById("form_mots_cles").innerHTML="   non valide"; 
		temp+=1;
	} 
	else document.getElementById("form_mots_cles").innerHTML=""; 

	if(temp!=0){
		return false
	}
	else return true;

}

//Vérifie la validité des infos données par un admin lors de la suppression d'un comics
function valider_suppression(formulaire){
	var temp=0;

	if(!id.value){
		document.getElementById("form_id").innerHTML="   non valide "; 
		temp+=1;
	}
	else document.getElementById("form_id").innerHTML=""; 

	if(!collection.value){
		document.getElementById("form_collection").innerHTML="   non valide "; 
		temp+=1;
	}
	else document.getElementById("form_collection").innerHTML=""; 


	if(temp!=0){
		return false
	}
	else return true;

}

//Vérifie une taille min de charactère lorsqu'un admin veut ajouter une news
function contenu(formulaire){
	var temp=0;

	if(add_news.value.length<15){
		document.getElementById("form_news").innerHTML="   non valide "; 
		temp+=1;
	}
	else document.getElementById("form_news").innerHTML=""; 

	if(temp!=0){
		return false
	}
	else return true;


}

function valider_suppression_news(){
	var temp=0;

	if(!supp_news.value){
		document.getElementById("form_sup_news").innerHTML="   non valide "; 
		temp+=1;
	}
	else document.getElementById("form_sup_news").innerHTML=""; 

	if(temp!=0){
		return false
	}
	else return true;

}