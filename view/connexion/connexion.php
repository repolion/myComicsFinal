  <body>
    <div id="main">
      <div id="site_content">
        <div id="sidebar_container">
          <div class="gallery">
            <ul class="images">
              <li class="show"><img width="450" height="450" src="<?php echo BASE_URL.'/webroot/img'.DS.'panthere1.jpg'; ?>" alt="photo_one" /></li>
              <li><img width="450" height="450" src="<?php echo BASE_URL.'/webroot/img'.DS.'veuve1.jpg'; ?>" alt="photo_two" /></li>
              <li><img width="450" height="450" src="<?php echo BASE_URL.'/webroot/img'.DS.'vision1.jpg'; ?>" alt="photo_three" /></li>
            </ul>
          </div>
        </div>
        <div id="content">

          <!-- Page de connexion de l'utilisateur-->
          <h1>Connexion membres</h1><br/>
          <form id="form" title="Connexion" name="form" action="index.php?page=connexion&pagesec=est_connecte" onsubmit="return validerFormulaire(this)" method="post" class="form">
            <div class="principal" id="case">

             <label for="email">Adresse Mail</label>
             <input type="email" class='input' name="email" id="email" /><span id="formEmail"></span><br/><br/>

             <label for="mot_de_passe">Mot de passe</label>
             <input type="password" class='input' name="mot_de_passe" id="mot_de_passe" /><span id="formPassword"></span><br/><br/>

             <div id="bouton">
              <input id="envoyer" type="submit" value="Connexion"/><br></div>
            </div>
          </form>  
          <a href="<?php echo BASE_URL.'/index.php?page=formulaire' ?>"><h3>Nouvel utilisateur</h3></a>
        </div>
      </div>
    </body>
    </html>
