<body>
	<div id="main">
		<div id="site_content">
			<div id="sidebar_container">
				<div class="gallery">
					<ul class="images">
						<li class="show"><img width="450" height="450" src="<?php echo BASE_URL.'/webroot/img'.DS.'hulk1.jpg'; ?>" alt="photo_one" /></li>
						<li><img width="450" height="450" src="<?php echo BASE_URL.'/webroot/img'.DS.'hulk1.jpg'; ?>" alt="photo_two" /></li>
						<li><img width="450" height="450" src="<?php echo BASE_URL.'/webroot/img'.DS.'wolverine1.jpg'; ?>" alt="photo_three" /></li>
					</ul>
				</div>
			</div>
			<div id="content">

				<?php

				if (!$resultat || !$email || !$mot_de_passe)
				{

					echo'<br/>';
					echo 'Mauvais identifiant ou mot de passe !<br/><br/>';
					echo "<a href='index.php?page=connexion'>Réessayer</a>";
				}
				else
				{

					echo '<h1>Vous êtes connecté !</h1><br/>';
					echo 'Bonjour'.' '.$_SESSION['prenom'].' '.$_SESSION['nom'].'<br />';
				
				}
				?>
			</div>
		</div>
	</div>
</body>
</html>

