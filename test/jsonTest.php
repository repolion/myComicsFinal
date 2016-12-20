<?php
$data = array();
$data["name"]  = "Cordier";
$data["Prenom"]  = "olivier";
$data["admin"] = true;
echo json_encode( $data );
// Affichera: 
// {"name":"olivier","date":1385132116,"admin":true}
