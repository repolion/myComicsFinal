<?php

//inclusion des fonctions du model
include BASE_URL.'/model/fonctions_BD.php';

include BASE_URL.'/core/fonctions.php';
//Vérification de l'existence de du login (e-mail) dans la table login_users
if(!isset($_GET['activation'])){
	if(user_existe($_POST['email']) || !filter_var($_POST['email'] , FILTER_VALIDATE_EMAIL)){

		header("Location: index.php?page=formulaire&existe=1&nom=".$_POST['nom']."&prenom=".$_POST['prenom']);
		exit();
	}
}
//inclus le header de la vue 
include (BASE_URL.'/view/headers/header.php');

if(isset($_GET['activation']) && isset($_GET['email'])){
	$est_Actif = est_Actif($_GET['email']);
	if(!$est_Actif){
		activerCompte($_GET['activation'],$_GET['email']);
	}
}
else{
	if(mdp_egale_mdp($_POST['mot_de_passe'],$_POST['mot_de_passe2']) &&  long_mdp($_POST['mot_de_passe'])){
//récupération des variables venant du formulaire
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$email=$_POST['email'];

		$password=sha1($_POST['mot_de_passe']);
		if (isset($_POST['newsletter'])){
			$newsletter=$_POST['newsletter'];
		}else $newsletter='off';

// Génération aléatoire d'une clé et actif mit à 0 (càd email pas encore confirmé)
		$cle_d_activation = md5(microtime(TRUE)*100000);
		$actif=0;


//ajout de l'utilisateur dans la table login_users
		ajouter_user($nom, $prenom, $email, $password, $cle_d_activation, $actif, $newsletter);
		$envoie=mailActivation($email, $cle_d_activation);
		$tout_ok=true;
	}else $tout_ok=false;
}

//inclusion de la vue => confirmation tout ok
include BASE_URL.'/view/formulaire/confirmation.php';

//le footer
include (BASE_URL.'/view/headers/footer.php');

$_SESSION['page_web']='confirmation.php'; 


