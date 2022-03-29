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

    public function getOffre($offset=0)
    {
        $this->connexion();
        $utilisateur = $this->_connexion->query("SELECT * FROM offre_de_stage LIMIT $offset,10");
        return $utilisateur->fetchAll();
    }

    public function compterOffre(){
        $this->connexion();
        $utilisateur = $this->_connexion->query('SELECT COUNT(*) AS nombre FROM offre_de_stage');
        $nombre =$utilisateur->fetch();
        return $nombre['nombre'];
    }

    public function getOffrebyID($id)
    {
        $this->connexion();
        $utilisateur = $this->_connexion->query("SELECT * FROM offre_de_stage WHERE id_Offre = $id");
        return $utilisateur->fetch();
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
            $this->_connexion = new PDO('mysql:host=localhost;dbname=projet;port=3307;' , 'root', 'root'); 
        } 
        catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function getEleve()
    {
        $this->connexion();
        $utilisateur = $this->_connexion->query('SELECT eleve.id_eleve, user.nom, user.prenom, user.centre, eleve.Promotion, user.email, eleve.id_user FROM eleve INNER JOIN user ON eleve.id_user = user.id_user; ');
        return $utilisateur->fetchAll();
    }
}

// ######################### Pilote ##########################
class Pilote {
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

    public function getPilote()
    {
        $this->connexion();
        $utilisateur = $this->_connexion->query('SELECT pilote.id_pilote, user.nom, user.prenom, user.email, user.centre, pilote.promotion_assignees, pilote.id_user FROM pilote INNER JOIN user ON pilote.id_user = user.id_user; ');
        return $utilisateur->fetchAll();
    }
}

?>