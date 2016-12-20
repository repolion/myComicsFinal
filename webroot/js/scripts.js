//Fonction qui valide les données fournies par l'utilisateur lors de son inscription
// * Reçoit en paramètre le formulaire des donneés complétée par l'utilisateur
function validerFormulaire(formulaire){
	var temp=0;

	if(nom.value.length<2){
		document.getElementById("form_nom").innerHTML=" Nom n'est pas valide "; 
		temp+=1;
	}
	else document.getElementById("form_nom").innerHTML=""; 

	if (prenom.value.length<2){
		document.getElementById("form_prenom").innerHTML=" Prénom non valide"; 
		temp+=1;
	}
	else document.getElementById("form_prenom").innerHTML=""; 
	
	if (!email.value){
		document.getElementById("form_email").innerHTML=" E-mail non valide"; 
		temp+=1;
	} 
	else document.getElementById("form_email").innerHTML=""; 

	if (email2.value!=email.value){
		document.getElementById("form_email2").innerHTML=" Confirmez votre E-mail"; 
		temp+=1;
	} 
	else document.getElementById("form_email2").innerHTML="";  

	if (mot_de_passe.value.length<8){
		document.getElementById("form_mdp").innerHTML=" 8 caractères minimum"; 
		temp+=1;
	} 
	else document.getElementById("form_mdp").innerHTML=""; 
	
	if (mot_de_passe2.value!=mot_de_passe.value){
		document.getElementById("form_mdp2").innerHTML=" Mot de passe non valide"; 
		temp+=1;
	} 
	else document.getElementById("form_mdp2").innerHTML=""; 

	if(temp!=0){
		return false
	}
	else return true;

}

//Vérifie que la barre de recherche n'est pas vide
function recherche_non_vide(Clef){
	var temp=0;

	if(motcle.value.length<1){
		document.getElementById("form_motcle").innerHTML="Introduisez un mot clé"; 
		temp+=1;
	}
	else document.getElementById("form_motcle").innerHTML=""; 


	if(temp!=0){
		return false
	}
	else return true;

}

//permet de cacher le contenu d'une div
function afficher_cacher(id)
{
	if(document.getElementById(id).style.visibility=="visible")
	{
		document.getElementById(id).style.visibility="hidden";
		document.getElementById('bouton_'+id).innerHTML='Affiche la div';
	}
	else
	{
		document.getElementById(id).style.visibility="visible";
		document.getElementById('bouton_'+id).innerHTML='Cache la div';
	}
	return true;
}

//fonction affichage de la preview lors de l'upload avec ajax
$(document).ready(function (e) {
	$("#form").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
			url: "webroot/ajax/ajaxupload.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
			cache: false,
			processData:false,
			beforeSend : function()
			{
				//$("#preview").fadeOut();
				$("#err").fadeOut();
			},
			success: function(data)
			{
				if(data=='invalid')
				{
					// invalid file format.
					$("#err").html("Invalid File !").fadeIn();
				}
				else
				{
					// view uploaded file.
					$("#preview").html(data).fadeIn();
					$("#form")[0].reset();	
				}
			},
			error: function(e) 
			{
				$("#err").html(e).fadeIn();
			} 	        
		});
	}));
});

