<footer>
	<p><a href="index.php">Accueil</a> | <a href="<?php echo BASE_URL.'/index.php?page=comics' ?>">Comics</a> | <a href="<?php echo BASE_URL.'/index.php?page=news' ?>">News</a></p>
	<p>&copy; 2016 My Comics. All Rights Reserved. </p>
</footer>
</div>
  
  <script type="text/javascript" src="<?php echo BASE_URL.'/webroot/js/jquery.easing.min.js'; ?>"></script>
  <script type="text/javascript" src="<?php echo BASE_URL.'/webroot/js/jquery.lavalamp.min.js'; ?>"></script>
  <script type="text/javascript" src="<?php echo BASE_URL.'/webroot/js/image_fade.js'; ?>"></script>
  <script type="text/javascript" src="<?php echo BASE_URL.'/webroot/js/modernizr-1.5.min.js'; ?>"></script>
  <script type="text/javascript">

    $(function() {
      $("#lava_menu").lavaLamp({
        fx: "backout",
        speed: 700
      });
    });
  </script>