<!DOCTYPE HTML>
<html>
<head>
  <title>my collection</title>
  <meta name="description" content="Comics collection" />
  <meta name="keywords" content="comics, marvel, collection, heroes" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="../webroot/css/style.css" />
  <script type="text/javascript" src="<?php echo BASE_URL.'/webroot/js/scripts.js'; ?>"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<header>
  <div id="logo"><h1>MY<a href="#">Comics</a></h1></div>
  <nav>
    <ul class="lavaLampWithImage" id="lava_menu">
      <li class="current"><a href="index.php">Accueil</a></li>
      <li><a href="<?php echo BASE_URL.'/index.php?page=news' ?>">News</a></li>
      <li><a href="<?php echo BASE_URL.'/index.php?page=comics' ?>">Comics</a></li>
      <li><a href="<?php echo BASE_URL.'/index.php?page=connexion' ?>">Se connecter</a></li>
    </ul>
  </nav>
</header>
<body>
  <div id="main">

    <div id="site_content">
     <div id="formulaire">

      <h1>Envoie E-mail</h1><br/>

      <?php
  /*      $destinataire = "42442@heb.be";
        echo "Ce script envoie un mail à $destinataire";
        $monMail=mail($destinataire, "test envoie mail", "envoie de mail par php");

        echo " (".$monMail." )";
        echo 'test9';
*/

        $headers="cordier.olivier83@gmail.com";
        $body = "Bonjour bonjour ";
        $subject = "Test envoie mail";
        $to = "42442@heb.be";

        if (mail($to, $subject, $body, $headers)) {
        echo "Envoyé!";
        } else {
        echo "pas envoyé…";
}
?>
    
 
  </div>
</div>
</body>
</html>


