<?php

$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // extensions d'images que j'accepte
$path = '../../webroot/img/marvel/'; // repertoire dans lequel j'upload les images
$path2='webroot/img/marvel/';

if(isset($_FILES['image']))
{
	$img = $_FILES['image']['name'];
	$tmp = $_FILES['image']['tmp_name'];
		
	// récupère l'extension de l'image
	$ext = pathinfo($img, PATHINFO_EXTENSION);
	
	// vérifie la validité du format
	if(in_array($ext, $valid_extensions)) 
	{					
		$path = $path.strtolower($img);	
		$path2= $path2.strtolower($img);	
			
		if(move_uploaded_file($tmp,$path)) 
		{
			echo "<img src='$path2' />";

		}
	} 
	else 
	{
		echo '<img src="webroot/img/non_valide.jpeg"/>';
	}
}


