<body>

  <div id="main">

    <div id="site_content">
    <div id="formu">

      <h1>Upload d'images</h1><br/>
      <hr>	
      <div id="preview"><img src="<?php echo BASE_URL.'/webroot/img/no-image.jpg'; ?>" /></div>

      <form id="form" action="<?php echo BASE_URL.'/webroot/ajax/ajaxupload.php'; ?>" method="post" enctype="multipart/form-data">
        <input id="uploadImage" type="file" accept="image/*" name="image" />
        <input id="button" type="submit" value="Upload">
      </form>
      <div id="err"></div>
      <hr>
    </br></br>
  </div>
</div>
</div>
<script type="text/javascript" src="<?php echo BASE_URL.'/webroot/js/scripts.js'; ?>"></script>
</body>

</html>

