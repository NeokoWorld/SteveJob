<?php 

try {
    $_connexion = new PDO('mysql:host=localhost;dbname=projet;port=3307;' , 'root', 'root'); 
} 
catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>