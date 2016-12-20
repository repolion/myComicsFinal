   <script type="text/javascript" src="webroot/js/jquery-3.1.1.min.js"></script>
<body>
<!-- Prévu pour incorporer de la pub sur le coté droit de l'écran ainsi que d'autres choses ...  -->

<!-- <div id="bloc">
<div id="pub">Je suis la pub</div>
<div id="menu">
<div id="choix">Je suis un des choix</div>
<div id="option"><a href="#favoris" onclick="goto('favoris');">favoris   </a><a href="#envies" onclick="goto('envies');">    envies</a></div>
</div>
</div> -->
	<div id="main">
		<div class="colonne">

		<!-- Bouton qui fait apparaitre un menu sur le côté droit-->
		<!-- <div id="envie_bouton"><a href="#"  onclick="return afficher_cacher('menu');"><img width="45" height="45" src="<?php echo BASE_URL.'/webroot/img/options2.png' ?>"/></a></div> -->
			<?php

				if($nombre_comics>0){
				affichage_mes_comics($nombre_comics,$mes_comics);
			}
			else{
					echo "<h1>Tu n'as pas de Comics dans ta collection !!!</h1></br></br>";
    echo "<img src='".BASE_URL.'/webroot/img'.DS.'dead_no_comics.jpg'."'/></br>";
			}

			?>

		</div>
	</div>
</body>
<script type="text/javascript">
 
    function goto(Page) {
        $("#choix").load("controller/" + Page + "/" + Page + ".php");           
    }
 
</script>
</html>





