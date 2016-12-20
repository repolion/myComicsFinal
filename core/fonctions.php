    <?php

    //fonctions qui affiche dans un tableau les donnees des utilisateurs pour être consultées par un admin
    function affichage_users($table_users){

     foreach($table_users as $chaque_user){

      echo "<TR> 
      <TH>".$chaque_user['id']."</TH> 
      <TH>".$chaque_user['nom']."</TH>
      <TH>".$chaque_user['prenom']."</TH>
      <TH>".$chaque_user['email']."</TH>
      <TH>".$chaque_user['newsletter']."</TH> 
      <TH>".$chaque_user['actif']."</TH> 
      <TH>".$chaque_user['droits']."</TH> 
    </TR>" ;

  }
  echo '</TABLE></br></br>';
}

//Affiche tous les comics sur une page (cover + tome) 
function afficher_tous_comics($comics){
  if($comics){

    foreach($comics as $chaque_comics){

      echo "<div class='comics'>";

      echo "<div class='titre_02'>Tome ".$chaque_comics['tome']."</div>";

      echo "<a href='".BASE_URL.'/index.php?page=comics&pagesec=affichage'."&id=".$chaque_comics['id']."&collection=".$chaque_comics['collection']."'><img width='183' height='275' src='";

      echo BASE_URL."/webroot/img/marvel/".$chaque_comics['cover'].".jpeg'/></a>";

      echo "</div>";
    }
  }
  else {

    echo '<h1>Aucun résultat ne correspond à votre recherche !!!</h1></br></br>';
    echo "<img width='770' height='388' src='".BASE_URL.'/webroot/img'.DS.'noResult.jpg'."'/></br></br>";
  }
}

//Affiche un comics avec sa cover + titre + tome + description
function affichage_infos_comic($comic){
  foreach($comic as $un_comics){

    echo '<div id="sidebar_container2">';
    echo "<img width='296' height='450' src='".BASE_URL.'/webroot/img/marvel/'.$un_comics['cover'].".jpeg'/>";
    echo '</div>';
    echo '<div id="content2">';
    echo'<h1>'.$un_comics['titre'].':  Tome '.$un_comics['tome'].'</h1><br/>';
    echo'<h3>Description:</h3><br/>';
    echo '<p>'.$un_comics['description'].'</p>';
    $ok=1;
    $nok=0;
  }

      //si l'utilisateur est connecté et qu'il a déjà ce commics...
  if (!empty($_SESSION['login']) && aComics($un_comics['id'],$un_comics['collection'])){

    echo "<h3>Ce Comics est dans ta collection</h3>";
    echo "<form method='post' action='".BASE_URL.'/index.php?page=comics&pagesec=mes_comics'."'>
    <input type='hidden' name='table_comics' value=".$un_comics['collection']."> 
    <input type='hidden' name='id_comics' value=".$un_comics['id']."> 
    <input type='hidden' name='supprimer' value=".$ok."> 
    <input type='hidden' name='ajouter' value=".$nok.">
    <input type='submit' value='Supprimer le Comics'>
  </form>"; 
}


    //si l'utlisateur est connecté et qu'il n'a pas encore ce comics...
else if (!empty($_SESSION['login'])){

  echo "<h3>Tu ne possèdes pas ce Comics</h3>";
  echo "<form method='post' action='".BASE_URL.'/index.php?page=comics&pagesec=mes_comics'."'>
  <input type='hidden' name='table_comics' value=".$un_comics['collection']."> 
  <input type='hidden' name='id_comics' value=".$un_comics['id']."> 
  <input type='hidden' name='supprimer' value=".$nok."> 
  <input type='hidden' name='ajouter' value=".$ok.">
  <input type='submit' value='Ajouter le Comics'>
</form>"; 

}                                              

echo '</div>';

}

//Affiche sur une page tous les comics de l'utilisateur covers + tomes
//Si l'utilisateur n'a pas de comics un message "spécial" est affiché 
function affichage_mes_comics($nombre_comics,$mes_comics){


  echo '<h1>Mes Comics</h1>';

  echo "<h2>Tu as ".$nombre_comics." Comics dans ta collection</h2></br></br>";


  foreach($mes_comics as $comics){

    echo '<div class="comics box">';

    echo '<div class="titre_02">'.'Tome '.$comics['tome'].'</div>';

    echo"<a href='".BASE_URL.'/index.php?page=comics&pagesec=affichage'."&id=".$comics['id']."&collection=".$comics['collection']."'><img width='183' height='275' src='";

    echo BASE_URL."/webroot/img/marvel/".$comics['cover'].".jpeg'/></a>";

    echo "</div>";

    
  }
}

//Affiche sous forme d'un tableau les infos des utilisateurs pour être consultée par un admin
function affiche_table_comics($table_comics){

  foreach($table_comics as $donnees){

    echo "<TR> 
    <TH>".$donnees['id']."</TH> 
    <TH>".$donnees['titre']."</TH>
    <TH>".$donnees['collection']."</TH>
    <TH>".$donnees['cover']."</TH>
    <TH>";
      if ($donnees['description']){
        echo 'oui';
      }
      else echo 'non';

      echo 
      "</TH> 
    </TR>" ;

  }
  echo '</TABLE></br></br>';
}

//fonction qui envoie un email à l'utilisateur pour que celui-ci puisse activer son compte
function mailActivation($email, $cle_d_activation){
  require 'PHPMailerAutoload.php';

  $mail = new PHPMailer;

/*$mail->SMTPDebug = 3;    */                           // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'myComicsInfo@gmail.com';                 // SMTP username
$mail->Password = 'kangourou42442';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('myComicsInfo@gmail.com', 'myComics');
$mail->addAddress($email, 'user');    

$mail->Subject = 'activation compte utilisateur myComics';
$mail->Body    = "Cliquez sur le liens ci dessous pour activer votre compte http://localhost/projetLion/myComicsMvc/index.php?page=formulaire&pagesec=confirmation&activation=".$cle_d_activation."&email=".$email  ;
$mail->AltBody = 'qsdfqsdf'.$cle_d_activation;

if(!$mail->send()) {
  return 0;
  /* echo 'Mailer Error: ' . $mail->ErrorInfo;*/
} else {
  return 1;
}

}

//fonctions qui affiche les news de la table news des plus récentes au plus anciennes
function  affichage($news){
  foreach($news as $element){
    //création d'une nouvelle date à partir du format datetime de la BD 
   $date = date_create($element['laDate']);
   //conversion de la date dans un formart plus conventionnel pour les news
    $date =  date_format($date, 'd/m/Y H:i:s');

    echo "<div id='news'>";
    echo "#".$element['id']." - Le ".$date."
    ( ".$element['auteur']." )</br></br>";
   echo "<ul>".$element['article']."</ul></br></div></br></br>";

 }


}