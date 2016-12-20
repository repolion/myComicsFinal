<body>
	<div id="main">
		<div id="site_content">
			<div id="sidebar_container">
				<div class="gallery">
					<ul class="images">
						<li class="show"><img width="450" height="450" src="<?php echo BASE_URL.'/webroot/img'.DS.'captain1.jpg'; ?>" alt="photo_one" /></li>
						<li><img width="450" height="450" src="<?php echo BASE_URL.'/webroot/img'.DS.'veuve1.jpg'; ?>" alt="photo_two" /></li>
						<li><img width="450" height="450" src="<?php echo BASE_URL.'/webroot/img'.DS.'rocket1.jpg'; ?>" alt="photo_three" /></li>
					</ul>
				</div>
			</div>
			<div id="content">

				
				<?php
				if(isset($_GET['activation'])){
					if($est_Actif){
						echo "</br></br>Ce compte est déjà activé...</br></br>";
					}else
					
					echo "</br></br>La procédure d'activation est en cours ...</br></br>";

				}
				else {

					if($tout_ok){
						echo"<br/>Les données ont bien été ajoutées !<br/><br/>";
						


						if($envoie==1){
							echo "Un e-mail d'activation a été envoyé sur votre boîte mail... veuiilez le lire avant de pouvoir vous connecter.<br/><br/>";
						}
						else
							echo "L'envoie d'un E-mail d'activcation à échoué!!!";
					}else echo "L'enregistrement de vos données a échoué!!!";
				}

				?>
				<a href="<?php echo BASE_URL.'/index.php?page=connexion' ?>">Se connecter</a>

			</div>
		</div>
	</div>
</body>
</html>

