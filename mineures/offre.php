<?php

//require './info.php';

$id_Offre = $_GET['idOffre'];
echo ($id_Offre);

require '../PHP/Class.php';
$offres = new Offre();
$detail = $offres->getOffrebyID($id_Offre); 
echo '<pre>';
var_dump($detail);
echo '</pre>';



?>