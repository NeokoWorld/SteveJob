<?php

require 'BDD_main.php';

$users = new BDD();
foreach($users->getBDD() as $user)
{   
    echo '<pre>';
    echo $user['id_offre'] , " " ;
    echo $user['competences'] , " ";
    echo $user['localite'] , " ";
    echo $user['entreprise'] , " ";
    echo $user['duree'] , " ";
    echo $user['remuneration'] , " ";
    echo $user['date_offre'] , " ";
    echo $user['id_fiche'] , " ";

    echo '</pre>';
}
$users->getBDD()

?>