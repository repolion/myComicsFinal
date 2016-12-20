<?php
if(empty($_SESSION['login'])) 
{
	header('Location: index.php');
	exit();
}


include (BASE_URL.'/view/headers/headerReg.php');

//inclus les fonctions de requête du model
include (BASE_URL.'/model/fonctions_BD.php');

if(isset($_POST['mot_de_passe']) && strlen($_POST['mot_de_passe'])>0){
	$mdp=sha1($_POST['mot_de_passe']);
	if(verif_MDP_connexion($_SESSION['login'],$mdp)){
		if(isset($_POST['new_mot_de_passe']) && isset($_POST['new_mot_de_passe2']) && mdp_egale_mdp($_POST['new_mot_de_passe'],$_POST['new_mot_de_passe2'])){
			changement_mdp($_POST['new_mot_de_passe']);
			$new_pass=true;
		}
		else $new_pass=false;
	}
	else $new_pass=false;

}

    //vérifie si la variable est_valide existe et si ok pour modifier les données de l'utilisateur
if(isset($_POST['est_valide']) && $_POST['est_valide'] == 'ok'){

	$login = $_SESSION['login'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];

	modification_user_infos($login,$nom,$prenom);
	$_SESSION['prenom']=$_POST['prenom'];
	$_SESSION['nom']=$_POST['nom'];

	$modifications=true;
}

$reponse=donnees_user($_SESSION['login']);

while ($donnees = $reponse->fetch())
{

	$id=$donnees['id'];
	$nom=$donnees['nom'];
	$prenom=$donnees['prenom'];
	$login=$_SESSION['login'];
	$newsletter=$donnees['newsletter'];
}

$reponse->closeCursor();

//inclus le la page html d'accueil de la vue
include BASE_URL.'/view/compte/compte.php';

//inclus le footer de la vue en fonction du type d'utilisateur
if(!empty(isset($_SESSION['admin']) && $_SESSION['admin']==1)){
	include (BASE_URL.'/view/headers/footer_adm.php');
}
else if(!empty($_SESSION['login'])){
	include (BASE_URL.'/view/headers/footer_registered.php');
}
else{
	include (BASE_URL.'/view/headers/footer.php');
}

$_SESSION['page_web']='mon_compte.php';






