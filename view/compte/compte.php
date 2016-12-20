<body>
	<div id="main">
		<div id=site_content>
			<div id="formulaire">

				<h1>Mon compte</h1><br/>

				<?php
				if(isset($modifications) && $modifications == true){
					echo '<p>Vos données';
					if(isset($new_pass) && $new_pass==true){
						echo " ainsi que votre mot de passe ";
					}

					echo ' ont été enregistrées</p>';
				}
				else echo"</br></br>";
				if (isset($new_pass) && $new_pass==false){
					echo "Erreur lors de la tentative de modification du MDP!</br></br>";
				}
				else echo '</br></br>';

				?>
				<form id="form" title="Mon compte" name="form" action="<?php echo BASE_URL.'/index.php?page=compte' ?>" onsubmit=" return modification_compte(this) " method="post" class="form">
					<div class="principal" id="case">

						<label for="nom">Nom</label>
						<input type="text" class="input" name="nom" id="nom" 
						<?php echo "value='".$nom."'" ?>
						/><span id="form_nom"></span><br/><br/>

						<label for="prenom">Prénom</label>
						<input type="text" class="input" name="prenom" id="prenom" 
						<?php echo "value='".$prenom."'" ?>
						/><span id="form_prenom"></span><br/><br/>

						<label for="login">Login</label>
						<span id="form_login"> <?php echo $login ?> </span><br/><br/><span id="hidden"></span>

						<label for="mot_de_passe">Mot de passe</label>
						<input type="password" class="input" name="mot_de_passe" id="mot_de_passe" /><span id="form_mdp"></span><br/><br/></br>

						<label for="new_mot_de_passe">Nouveau mot de passe</label>
						<input type="password" class="input" name="new_mot_de_passe" id="new_mot_de_passe" /><span id="form_new_mdp"></span><br/><br/>

						<label for="new_mot_de_passe2">Confirmation</label>
						<input type="password" class="input" name="new_mot_de_passe2" id="new_mot_de_passe2" /><span id="form_new_mdp2"></span><br/><br/>

						<label>Newsletter</label><input type="checkbox" name="newsletter"></br></br><br/>

						<!-- envoi en post variable est_valide pour indiquer à la page mon_compte.php que les données peuvent être modifiées-->
						<input type='hidden' name='est_valide' value="ok"> 

						<div id="bouton">
							<input id="envoyer" type="submit" value="Enregistrer"/></div><br/><br/>

						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo BASE_URL.'/webroot/js/modif.js'; ?>"></script>
</body>
</html>



