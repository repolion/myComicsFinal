<?php
if(!isset($_SESSION['admin']) || $_SESSION['admin']!=1) 
{
	header('Location: index.php');
	exit();
}

//Controller table_comics

//inclus le header de la vue en fonction du type d'utilisateur (visiteur / inscrit)
if(!empty($_SESSION['login'])){
	include (BASE_URL.'/view/headers/headerReg.php');
}else{
	include (BASE_URL.'/view/headers/header.php');
}

//inclus les fonctions de requête du model
include BASE_URL.'/model/fonctions_BD.php';

//inclus les fonctions d'affichage
include BASE_URL.'/core/fonctions.php';

if(isset($_POST['change'])){
	switch($_POST['change']){
		case 'ajouter':	if(collection_existe($_POST['collection'])){
			admin_ajouter_comics($_POST['titre'],$_POST['tome'],$_POST['collection'],$_POST['cover'],$_POST['description'],$_POST['mots_cles']);
		}else $warning=0;
		break;
		case 'supprimer' : if(collection_existe($_POST['collection']) && comics_existe($_POST['id'],$_POST['collection'])){
			admin_supprimer_comics($_POST['collection'],$_POST['id']);
		}else $warning=0;

		break;
	}
}

$table_comics=table_comics();

$table='marvel_now';


//inclus le la page html d'accueil de la vue
include BASE_URL.'/view/config/table_comics.php';

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
$_SESSION['page_web']='config.php';
