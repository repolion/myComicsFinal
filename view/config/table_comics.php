<!DOCTYPE HTML>
<html>
<head>
  <title>my Comics</title>
  <meta name="description" content="Comics collection" />
  <meta name="keywords" content="comics, marvel, collection, heroes" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>
<body>
  <div id="main">
    <div id="site_content">
     <div id="table_users">

      <TABLE>
        <CAPTION><h2> Liste des Comics</h2>(en bas : <a href="#generale">modifications</a>)</br></br></CAPTION>
        <TR> 
          <TH> Id Comic</TH> 
          <TH> Titre</TH>
          <TH> Collection</TH>
          <TH> Cover fichier</TH>
          <TH> Description</TH> 
        </TR> 

        <?php
       //affiche la table de tous les comics de la table Marvell_now pour être consultée par un admin
        affiche_table_comics($table_comics);
        ?>

      </div>

      <div id="generale">

        <div id="warning"><?php if(isset($warning)){echo "</br></br>La dernière tentative de modification ne s'est pas déroulée correctement...</br></br>"; }?></div>
        
        <div id="options"><a href="#ajouter" onclick="goto('ajouter');">Ajouter</a>&emsp;|&emsp;<a href="#supprimer" onclick="goto('supprimer');">Supprimer</a>&emsp;|&emsp;<a href="index.php?page=config&pagesec=upload" >Upload cover</a></div>
        <div id="contenus"></div>
      </div></br></br>
    </div>
  </div>
  <script type="text/javascript" src="<?php echo BASE_URL.'/webroot/js/modif.js'; ?>"></script>
</body>
<script type="text/javascript">
 
  function goto(Page) {
    $("#contenus").load("controller/config/" + Page + ".php");           
  }
  
</script>
</html>


