<?php

// ######################### Offre de stage ##########################
class Offre {
    private $_connexion; //PDO

    private function connexion()
    {
        try {
            $this->_connexion = new PDO('mysql:host=localhost;dbname=projet;port=3306;' , 'root', ''); 
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
            $this->_connexion = new PDO('mysql:host=localhost;dbname=projet;port=3306;' , 'root', ''); 
        } 
        catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function getEntreprise($offset=0)
    {
        $this->connexion();
        $utilisateur = $this->_connexion->query("SELECT * FROM fiche_entreprise LIMIT $offset,10");
        return $utilisateur->fetchAll();
    }

    public function compterEntreprise(){
        $this->connexion();
        $utilisateur = $this->_connexion->query('SELECT COUNT(*) AS nombre FROM fiche_entreprise');
        $nombre =$utilisateur->fetch();
        return $nombre['nombre'];
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

    public function getEleve($offset=0)
    {
        $this->connexion();
        $utilisateur = $this->_connexion->query("SELECT eleve.id_eleve, eleve.Promotion,eleve.id_user, user.nom, user.prenom, user.email, user.centre FROM eleve INNER JOIN user ON eleve.id_user = user.id_user LIMIT $offset,10");
        return $utilisateur->fetchAll();
    }
    public function compterEleve(){
        $this->connexion();
        $utilisateur = $this->_connexion->query('SELECT COUNT(*) AS nombre FROM eleve');
        $nombre =$utilisateur->fetch();
        return $nombre['nombre'];
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

    public function getPilote($offset=0)
    {
        $this->connexion();
        $utilisateur = $this->_connexion->query("SELECT pilote.id_pilote, pilote.promotion_assignees,pilote.id_user, user.nom, user.prenom, user.email, user.centre FROM pilote INNER JOIN user ON pilote.id_user = user.id_user LIMIT $offset,10");
        return $utilisateur->fetchAll();
    }

    public function compterPilote(){
        $this->connexion();
        $utilisateur = $this->_connexion->query('SELECT COUNT(*) AS nombre FROM pilote');
        $nombre =$utilisateur->fetch();
        return $nombre['nombre'];
    }
}

?>