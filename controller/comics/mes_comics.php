<?php
if(empty($_SESSION['login'])) 
{
	header('Location: index.php');
	exit();
}

//inclus le header d'utilisateur enregistré
include (BASE_URL.'/view/headers/headerReg.php');

//inclus les fonctions de requête du model
include (BASE_URL.'/model/fonctions_BD.php');

//inclus les fonctions d'affichage
include (BASE_URL.'/core/fonctions.php');

if($_SESSION['page_web']=='affichage.php' && isset($_POST['ajouter']) && $_POST['ajouter']==1){

	//ajoute un comic dans la table de collectioin
	ajouter_dans_table($_POST['id_comics'],$_POST['table_comics']);

}
if($_SESSION['page_web']=='affichage.php' && isset($_POST['supprimer']) && $_POST['supprimer']==1){
	//supprime un comic de la table de collection
	supprimer_dans_table($_POST['id_comics'],$_POST['table_comics']);
}


$id_user = $_SESSION['id'];

//variable reçoit le nombre de comics de l'utilisateur
$nombre_comics = nombre_comics($id_user);

if($nombre_comics>0){
//tableau de comics de l'utilisateur
$mes_comics = mes_comics($id_user);
}

//inclus le la page html d'accueil de la vue
include BASE_URL.'/view/comics/mes_comics.php';

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
$_SESSION['page_web']='mes_comics.php';

