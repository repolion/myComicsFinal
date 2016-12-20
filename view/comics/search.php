<div class="search">
	<form title="Barre de recherche" name="search" action="<?php echo BASE_URL.'/index.php?page=comics' ?>" onsubmit="return recherche_non_vide(this)" method="post" class="search">
		<span id="form_motcle"></span></br>
		<input type="search" placeholder="Entrez un mot-clé" id ="motcle" name="motcle">
		<input id="envoyer" type="submit" value="Chercher"/>
	</form>
</div>
