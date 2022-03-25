<?php

require 'Class.php';

$users = new Offre();
foreach($users->getOffre() as $user)
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
$users->getOffre();

$users = new Entreprise();
foreach($users->getEntreprise() as $user)
{   
    echo '<pre>';
    echo $user['id_fiche'] , " " ;
    echo $user['Nom'] , " ";
    echo $user['secteur_activite'] , " ";
    echo $user['Localite'] , " ";
    echo $user['Nb_stagiaire_cesi'] , " ";
    echo $user['evaluation_stagiaire'] , " ";
    echo $user['confiance_pilote'] , " ";
    echo '</pre>';
}
$users->getEntreprise();

$users = new Eleve();
foreach($users->getEleve() as $user)
{   
    echo '<pre>';
    echo $user['id'] , " " ;
    echo $user['pseudo'] , " ";
    echo $user['motDePasse'] , " ";
    echo $user['statusAdmin'] , " ";
    echo '</pre>';
}
$users->getEleve();
?>