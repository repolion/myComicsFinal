  <?php
  //Controller Connexion

  if(!empty($_SESSION['login'])) 
  {
    header('Location: index.php');
    exit();
  }

//inclus le header de la vue 
include (BASE_URL.'/view/headers/header.php');

include BASE_URL.'/view/connexion/connexion.php';

//inclus le footer de la vue en fonctyion du type d'utilisateur

include (BASE_URL.'/view/headers/footer.php');

$_SESSION['page_web']='connexion.php';