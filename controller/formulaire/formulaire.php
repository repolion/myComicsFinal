  <?php
  //Controller Connexion

  if(!empty($_SESSION['login'])) 
  {
    header('Location: index.php');
    exit();
  }

//inclus le header de la vue 
include (BASE_URL.'/view/headers/header.php');

//inclus le formulaire de view
include (BASE_URL.'/view/formulaire/formulaire.php');

//inclus le footer de la vue en fonctyion du type d'utilisateur
if(!empty(isset($_SESSION['admin']) && $_SESSION['admin']==1)){
	include ('footer_adm.php');
}
else if(!empty($_SESSION['login'])){
	include (BASE_URL.'/view/headers/footer_registered.php');
}
else{
	include (BASE_URL.'/view/headers/footer.php');
}
$_SESSION['page_web']='formulaire.php';
