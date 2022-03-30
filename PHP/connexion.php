<?php
include 'Class.php';

$co= new LoginRepository();
$verif=$co->login(' ', ' ');
print_r($verif);

// if(){

// }else{
//     echo "L'identifiant ou le mot de passe est incorrecte"
// }

?>