<?php
if(!empty($_SESSION['login'])) 
{
  header('Location: index.php');
  exit();
}


//E-mail de l'utilisateur
$email=$_POST['email'];

//Hachage du mot de passe de l'utilisateur
$mot_de_passe=sha1($_POST['mot_de_passe']);
/* $mot_de_passe=mysql_real_escape_string(sha1($_POST['mot_de_passe']));
mysql_real_escape ne s'utilise plus avec php 7. => pdo en l'echapement en charge => à approfondir */

//inclus les fonctions de requête du model
include BASE_URL.'/model/fonctions_BD.php';

$resultat=verif_MDP_connexion($email,$mot_de_passe);


if ($resultat && $email && $mot_de_passe){

//Récupération des données de l'utilisateur et création de variables superglobales (de session)  
  session_var($email);
}

//inclus le header de la vue en fonction du type d'utilisateur (visiteur / inscrit)
if(!empty($_SESSION['login'])){
  include (BASE_URL.'/view/headers/headerReg.php');
}else{
  include (BASE_URL.'/view/headers/header.php');
}

//inclusion de la page html confirmant l'état de la connexion (de la vue)
include BASE_URL.'/view/connexion/est_connecte.php';

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
$_SESSION['page_web']='est_connecte.php';
