  <div id="main">
    <div id="site_content">
     <div id="formulaire"></br></br>
      <h2>Espace Admin</h2><br/> </br>
      <h3>Il y a
        <?php 
        echo ' '.$nombre_users.' ';
        ?> 
        utilisateurs dans la BD de "my Comics" </h3>

        <a href="<?php echo BASE_URL.'/index.php?page=config&pagesec=table_users' ?>" >Consulter table utilisateurs</a></br></br>
        <a href="<?php echo BASE_URL.'/index.php?page=config&pagesec=table_comics' ?>" >Table Comics</a></br></br>
        <a href="<?php echo BASE_URL.'/index.php?page=config&pagesec=ajouter_news' ?>" >Ajouter News</a></br></br>

     
      </div>
    </div>
  </body>
  </html>
