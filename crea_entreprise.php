<?php
session_start();
include './PHP/Class.php';
$co= new Entreprise();
$creater_entreprise=$co->addEntreprise($_POST['nom'], $_POST['prenom'], $_POST['localite'], $_POST['nbStag'], $_POST['valStag'], $_POST['confPi']);
var_dump($creater_entreprise);

if($creater_entreprise)
{
    header("Location:../listes/l-entreprise.php");
    exit;
}
else{
    echo "L'identifiant ou le mot de passe est incorrect";
}

?>