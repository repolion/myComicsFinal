<?php
	//controller
	

//inclus les fonctions de requête du model
include '../../model/fonctions_BD.php';

$comics = tout_comics('marvel_now');

include '../../view/favoris/favoris.php';