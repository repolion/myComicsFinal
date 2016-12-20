<?php
//Controller News

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

if(isset($_POST['add_news'])){
	$datetime = date("Y-m-d H:i:s");

	ajouter_news($datetime,$_POST['add_news']);
}
if(isset($_POST['supp_news'])){

	
	$deleted=supprimer_news($_POST['supp_news']);
	
}

//vérifie qu'il y a bien des news dans la base de données
if(news_are_ok()){
	$news=rechercher_news();
}
//inclus le la page html d'accueil de la vue
include(BASE_URL.'/view/news/news.php');

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
$_SESSION['page_web']='news.php';
