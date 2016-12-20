<?php
//Controller Comics

//inclus le header de la vue en fonction du type d'utilisateur (visiteur / inscrit)
if(!empty($_SESSION['login'])){
	include (BASE_URL.'/view/headers/headerReg.php');
}else{
	include (BASE_URL.'/view/headers/header.php');
}

//inclus les fonctions de requête du model
include BASE_URL.'/model/fonctions_BD.php';

//inclus les fonctions d'affichages
include BASE_URL.'/core/fonctions.php';

//si une recherche à été faite affiche le résulat
if(isset($_POST['motcle'])){
	$comics=recherche_comics($_POST['motcle']);
}
//recherche tous les Comics et les place dans un tableau
else
	$comics=tout_comics('marvel_now','dc_comics');
	
//inclus la barre de recherche
/*include BASE_URL.'/view/comics/search.php';*/

//inclus le la page html d'accueil de la vue
include BASE_URL.'/view/comics/comics.php';


//inclus le footer de la vue en fonctyion du type d'utilisateur
if(!empty(isset($_SESSION['admin']) && $_SESSION['admin']==1)){
	include (BASE_URL.'/view/headers/footer_adm.php');
}
else if(!empty($_SESSION['login'])){
	include (BASE_URL.'/view/headers/footer_registered.php');
}
else{
	include (BASE_URL.'/view/headers/footer.php');
}
$_SESSION['page_web']='comics.php';
