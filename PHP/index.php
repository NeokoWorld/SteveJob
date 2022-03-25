<?php

require 'BDD_main.php';

$users = new BDD();
foreach($users->getBDD() as $user)
{   
    echo '<pre>';
    echo $user['id'] , " " ;
    echo $user['pseudo'] , " ";
    echo $user['motDePasse'] , " ";
    echo $user['statutAdmin'] , " ";
    echo '</pre>';
}
$users->getBDD()

?>