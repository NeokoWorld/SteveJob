<?php
include_once 'Class.php'

$co= new Login();
$verif=$co->login();
print_r($verif);

// if(){

// }else{
//     echo "L'identifiant ou le mot de passe est incorrecte"
// }

?>