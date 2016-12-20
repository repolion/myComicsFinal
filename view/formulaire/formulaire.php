
<body>
  <div id="main">

    <div id="site_content">
     <div id="formulaire">

      <h1>Formulaire d'inscription</h1><br/>
      <form id="form" title="Envoyer Formulaire d'insciption" name="form" action="<?php echo BASE_URL.'/index.php?page=formulaire&pagesec=confirmation';?>"  onsubmit="return validerFormulaire(this)" method="post" class="form">

        <div class="principal" id="case">

         <label fo="nom">Quel est votre nom ?</label>
         <?php
         echo"<input type='text' name='nom' id='nom'";
         if(isset($_GET['nom'])){
          echo "value='".$_GET['nom']."'";
        }
        echo "/>";
        ?>
        <span id="form_nom"></span><br/><br/>

        <label for="prenom">Quel est votre prénom ?</label>
        <?php
        echo"<input type='text' name='prenom' id='prenom'";
        if(isset($_GET['prenom'])){
          echo "value='".$_GET['prenom']."'";
        }
        echo "/>";
        ?>
        <span id="form_prenom"></span><br/><br/>

        <label for="email">Quel est votre e-mail ?</label>
        <input type="email" name="email" id="email" />

        <!-- informe, éventuellement, l'utilisateur de l'existance du login -->
        <?php
        echo "<span id='form_email'>";
        if(isset($_GET['existe']) && $_GET['existe']==1){
          echo 'E-mail non accepté !';
        }
        echo "</span><br/><br/>";
        ?>

        <label for="email">Confirmer votre E-mail</label>
        <input type="email" name="email2" id="email2" /><span id="form_email2"></span><br/><br/>

        <label>Inscrivez un mot de passe?</label>
        <input type="password" name="mot_de_passe" id="mot_de_passe"><span id="form_mdp"></span><br/><br/>

        <label>Confirmer mot de passe</label>
        <input type="password" name="mot_de_passe2" id="mot_de_passe2"><span id="form_mdp2"></span><br/><br/>

        <label>Souscrire à la newsletter?</label><input id="checkbox" type="checkbox" name="newsletter">
      </br></br><br/>
      <div id="bouton">
        <input id="envoyer" type="submit" value="Envoyer"/></div><br/><br/>

      </div>
    </form>
    
  </div>
</div>
<script type="text/javascript" src="<?php echo BASE_URL.'/webroot/js/script.js'; ?>"></script>
</body>
</html>


