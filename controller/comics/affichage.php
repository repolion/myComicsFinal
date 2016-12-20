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

//inclus les fonctions de requête du model
include BASE_URL.'/core/fonctions.php';

$comic=info_comic($_GET['id'],$_GET['collection']);

//inclus le la page html d'accueil de la vue
include BASE_URL.'/view/comics/affichage.php';


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
$_SESSION['page_web']='affichage.php';