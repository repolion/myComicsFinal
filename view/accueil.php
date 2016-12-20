<body>
  <div id="main">
  <div id="site_content">
  <div id="sidebar_container">
    <div class="gallery">
      <ul class="images">
        <li class="show"><img width="450" height="450" src="<?php echo BASE_URL.'/webroot/img'.DS.'captain.jpg'; ?>" alt="photo_one" /></li>
        <li><img width="450" height="450" src="<?php echo BASE_URL.'/webroot/img/loki1.jpg'; ?>" alt="photo_two" /></li>
        <li><img width="450" height="450" src="<?php echo BASE_URL.'/webroot/img/deadpool1.jpg'; ?>" alt="photo_three" /></li>
      </ul>
    </div>
  </div>
  <div id="content">
    <h1>Bienvenue sur MyComics</h1>
    <p>Un site internet qui permet de gérer sa collection de Comics...</p>
    <div id="json_box"></div>
<button id="lire">Webmaster</button></br></br>  Contacter  <a href="mailto:mycomicsinfo@gmail.com">par E-mail</a>

<script>
  $(function() {
    $('#lire').click(function() {
        $.getJSON('webroot/json/projet_my_comics.json', function(donnees) {
        $('#json_box').html('<p><b>Nom</b> : ' + donnees.nom + '</p>');
        $('#json_box').append('<p><b>Matricule</b> : ' + donnees.matricule + '</p>');
        $('#json_box').append('<p><b>Groupe</b> : ' + donnees.groupe + '</p>');
        $('#json_box').append('<p><b>Cours</b> : ' + donnees.cours + '</p>');
         $('#json_box').append('<p><b>Projet</b> : ' + donnees.cadre + '</p>');
      });
    });  
  });
</script>
  </div>

</div>

</div>
</body>
</html>
