
<body>
  <div id="main">
    <div id="site_content">
     <div id="ajouter_news"> 
       <h1>Ajouter news</h1>

       <form id="form" title="Publication d'une news" name="form" action="<?php echo BASE_URL.'/index.php?page=news';?>"  onsubmit="return contenu(this)" method="post" class="form">

        <label for="email">Ecrire une news :</label></br></br>
        <textarea cols="150" rows="5" type="text" name="add_news" id="add_news"></textarea><span id="form_news"></span><br/><br/>

        <div id="bouton">
          <input id="envoyer" type="submit" value="Publier"/></div><br/><br/>

        </div>
      </form>

    </div>
  </div>
  <script type="text/javascript" src="<?php echo BASE_URL.'/webroot/js/modif.js'; ?>"></script>
</body>
</html>



