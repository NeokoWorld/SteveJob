<?php

class BDD {
   
    private $_connexion; //PDO

    private function connexion()
    {
        try {
            $this->_connexion = new PDO('mysql:host=localhost;dbname=projet;port=3307;' , 'root', 'root'); 
        } 
        catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function getBDD()
    {
        $this->connexion();
        $utilisateur = $this->_connexion->query('SELECT * FROM offre_de_stage');
        return $utilisateur->fetchAll();
    }
}




?>