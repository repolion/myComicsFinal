<body>
	
	<div id="main">

		<div class="colonne">
			
			<h1>Marvel Now : Panini Comics</h1>

			<?php

			include 'search.php';
			
			//Affichage sur sur une page de tous les comics de la table Marvel_now
			afficher_tous_comics($comics);

			?>

		</div>

	</div>
	<script type="text/javascript" src="<?php echo BASE_URL.'/webroot/js/scripts.js'; ?>"></script>
</body>
</html>


