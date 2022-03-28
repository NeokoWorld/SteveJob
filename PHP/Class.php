<?php

// ######################### Offre de stage ##########################
class Offre {
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

    public function getOffre()
    {
        $this->connexion();
        $utilisateur = $this->_connexion->query('SELECT * FROM offre_de_stage');
        return $utilisateur->fetchAll();
    }

    public function getOffrebyID($id)
    {
        $this->connexion();
        $utilisateur = $this->_connexion->query("SELECT * FROM offre_de_stage WHERE id_offre = $id");
        return $utilisateur->fetchAll();
    }

}


// ######################### Entreprise ##########################
class Entreprise {
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

    public function getEntreprise()
    {
        $this->connexion();
        $utilisateur = $this->_connexion->query('SELECT * FROM fiche_entreprise');
        return $utilisateur->fetchAll();
    }
}

// ######################### Eleve ##########################
class Eleve {
    private $_connexion; //PDO

    private function connexion()
    {
        try {
            $this->_connexion = new PDO('mysql:host=localhost;dbname=corbeille_p7;port=3307;' , 'root', 'root'); 
        } 
        catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function getEleve()
    {
        $this->connexion();
        $utilisateur = $this->_connexion->query('SELECT * FROM utilisateurs');
        return $utilisateur->fetchAll();
    }
}

// ######################### Pilote ##########################
class Pilote {
    private $_connexion; //PDO

    private function connexion()
    {
        try {
            $this->_connexion = new PDO('mysql:host=localhost;dbname=corbeille_p7;port=3307;' , 'root', 'root'); 
        } 
        catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function getPilote()
    {
        $this->connexion();
        $utilisateur = $this->_connexion->query('SELECT * FROM utilisateurs');
        return $utilisateur->fetchAll();
    }
}

?>