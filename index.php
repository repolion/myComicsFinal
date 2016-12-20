<?php
session_start();
if(isset($_GET['logout'])){
	$_SESSION = array();
	session_destroy();
}


//inclus les constantes d'accès 
include ("webroot/index.php");

if(!empty($_GET['page']) && is_file('controller/'.$_GET['page'].'/'.$_GET['page'].'.php')){
	if(!empty($_GET['pagesec']) && is_file('controller/'.$_GET['page'].'/'.$_GET['pagesec'].'.php')){

		include ('controller/'.$_GET['page'].'/'.$_GET['pagesec'].'.php');
		

	}
	else {include ('controller/'.$_GET['page'].'/'.$_GET['page'].'.php');
	}

}
else{
	include ('controller/accueil.php');

}
?>
