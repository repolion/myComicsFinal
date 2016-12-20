<!DOCTYPE HTML>
<html>
<head>
  <title>my collection</title>
  <meta name="description" content="Comics collection" />
  <meta name="keywords" content="comics, marvel, collection, heroes" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="../webroot/css/style.css" />
  <script type="text/javascript" src="<?php echo BASE_URL.'/webroot/js/scripts.js'; ?>"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<header>
  <div id="logo"><h1>MY<a href="#">Comics</a></h1></div>
  <nav>
    <ul class="lavaLampWithImage" id="lava_menu">
      <li class="current"><a href="index.php">Accueil</a></li>
      <li><a href="<?php echo BASE_URL.'/index.php?page=news' ?>">News</a></li>
      <li><a href="<?php echo BASE_URL.'/index.php?page=comics' ?>">Comics</a></li>
      <li><a href="<?php echo BASE_URL.'/index.php?page=connexion' ?>">Se connecter</a></li>
    </ul>
     <script>
            $(function () {
                $('#my_form').on('submit', function (e) {
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        url: $form.attr('action'),
                        type: $form.attr('method'),
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                            $('#result > pre').html(JSON.stringify(response, undefined, 4));
                        }
                    });
                });

                // A change sélection de fichier
                $('#my_form').find('input[name="image"]').on('change', function (e) {
                    var files = $(this)[0].files;

                    if (files.length > 0) {
                        // On part du principe qu'il n'y qu'un seul fichier
                        // étant donné que l'on a pas renseigné l'attribut "multiple"
                        var file = files[0],
                            $image_preview = $('#image_preview');

                        // Ici on injecte les informations recoltées sur le fichier pour l'utilisateur
                        $image_preview.find('.thumbnail').removeClass('hidden');
                        $image_preview.find('img').attr('src', window.URL.createObjectURL(file));
                        $image_preview.find('h4').html(file.name);
                        $image_preview.find('.caption p:first').html(file.size +' bytes');
                    }
                });

                // Bouton "Annuler"
                $('#image_preview').find('button[type="button"]').on('click', function (e) {
                    e.preventDefault();

                    $('#my_form').find('input[name="image"]').val('');
                    $('#image_preview').find('.thumbnail').addClass('hidden');
                });
            });
        </script>

  </nav>
</header>
<body>
  <div id="main">

    <div id="site_content">
     <div id="formulaire">

      <h1>upload d'images</h1><br/>

    <form id="my_form" method="post" action="process_form.php" enctype="multipart/form-data">
    <input type="text" name="title"><span>Nom de l'image</span></br></br>
    <textarea name="content"></textarea><span>Commentaire</span></br></br>
    <input type="file" name="image" accept="image/*"></br></br>
    <button type="submit">OK</button>
</form>

  </div>
</div>
</body>

</html>


