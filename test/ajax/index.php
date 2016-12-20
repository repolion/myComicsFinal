  

  <link rel="stylesheet" type="text/css" href="../../webroot/css/style.css" />
  <script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL.'/webroot/js/scripts.js'; ?>"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<body>

  <div id="main">

    <div id="site_content">
     <div id="formulaire">

      <h1>upload d'images</h1><br/>
<hr>	
	<div id="preview"><img src="no-image.jpg" /></div>
    
	<form id="form" action="<?php echo BASE_URL.'/webroot/ajaxupload.php'; ?>" method="post" enctype="multipart/form-data">
		<input id="uploadImage" type="file" accept="image/*" name="image" />
		<input id="button" type="submit" value="Upload">
	</form>
    <div id="err"></div>
	<hr>
</br></br>
  </div>
  </div>

</body>

</html>


