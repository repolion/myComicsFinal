<?php

$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // extensions d'images que j'accepte
$path = 'webroot/img/marvel/'; // repertoire dans lequel j'upload les images

if(isset($_FILES['image']))
{
	$img = $_FILES['image']['name'];
	$tmp = $_FILES['image']['tmp_name'];
		
	// récupère l'extension de l'image
	$ext = pathinfo($img, PATHINFO_EXTENSION);
	
	// permet d'uploader en utilisant la fonction rand
	$final_image = $img; //rand(10,100).
	
	// vérifie la validité du format
	if(in_array($ext, $valid_extensions)) 
	{					
		$path = $path.strtolower($final_image);	
			
		if(move_uploaded_file($tmp,$path)) 
		{
			echo "<img src='$path' />";
		}
	} 
	else 
	{
		echo 'image non pas valide';
	}
}


