
  <body>
    <div id="main">
      <div id="site_content">
       <div id="table_users"> 


        <TABLE> 
          <CAPTION><h2> Tables Utilisateurs</h2></br></CAPTION>
          <TR> 
           <TH> id user</TH> 
           <TH> nom</TH>
           <TH> prénom</TH>
           <TH> E-mail</TH>
           <TH> Newsletter</TH> 
           <TH> Actif</TH> 
           <TH> Droits</TH> 
         </TR> 
         <?php
         affichage_users($table_users);
         ?>

         <form id="form" title="Modification droits utilisateur" name="form" action="<?php echo BASE_URL.'/index.php?page=config&pagesec=table_users';?>" onsubmit="return valider_droits(this)" method="post" class="form">

         <label for="user">Id de l'utilisateur</label>
           <input type="text" name="user" id="user" /><span id="form_user"><?php if (isset($nexiste)){echo "   id n'existe pas";} ?></span><br/><br/>

           <label>Nouvelle valeur de ses droits</label>
           <input type="text" name="droits" id="droits"><span id="form_droits"><?php if (isset($badd)){echo "   0 ou 1";} ?></span><br/><br/>
           

           <div id="bouton">
            <input id="enregistrer" type="submit" value="Enregistrer"/></div><br/><br/>
          </form>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="<?php echo BASE_URL.'/webroot/js/modif.js'; ?>"></script>
  </body>
  </html>



