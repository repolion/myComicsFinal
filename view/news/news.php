<body>
  <div id="main">
    <div id="site_content">
      <div id="sidebar_news">
        <div class="gallery">
          <ul class="images">
            <li class="show"><img width="450" height="1197" src="<?php echo BASE_URL.'/webroot/img'.DS.'news3.jpg'; ?>" alt="photo_one" /></li>
            <li><img width="450" height="1197" src="<?php echo BASE_URL.'/webroot/img'.DS.'news2.jpg'; ?>" alt="photo_two"  /></li>
            <li><img width="450" height="1197" src="<?php echo BASE_URL.'/webroot/img'.DS.'news1.jpg'; ?>" alt="photo_three" /></li>
          </ul>
        </div>
      </div>
      <div id="content">
        <h1>Mises à jour</h1>
        
        <?PHP  
        if(isset($news))affichage($news);

        if(!empty(isset($_SESSION['admin']) && $_SESSION['admin']==1)){
          include (BASE_URL.'/view/config/supprimer_news.php');
        }
        ?>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="<?php echo BASE_URL.'/webroot/js/modif.js'; ?>"></script>
</body>
</html>
