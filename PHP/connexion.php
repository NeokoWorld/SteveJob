<?php
include 'Class.php';

$co= new LoginRepository();
$verif=$co->login($_POST['login'],$_POST['mdp']);
print_r($verif);

if(count($verif)>0){
     
}else{
    echo "L'identifiant ou le mot de passe est incorrecte"
}

?>