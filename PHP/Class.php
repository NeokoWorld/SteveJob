<?php

// #########################  Connexion ##########################
class LoginRepository {
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

    public function login($identifiant, $mdp)
    {
        $this->connexion();
        $stmt = $this->_connexion->prepare("SELECT * FROM authentification INNER JOIN user ON authentification.id_auth = user.id_auth INNER JOIN role ON role.ID_Role = user.ID_Role WHERE login= ? and mdp= ?");
        $stmt -> bindValue(1, $identifiant, PDO::PARAM_STR);
        $stmt -> bindValue(2, $mdp, PDO::PARAM_STR);
        $stmt -> execute();
        return $stmt->fetchAll();
    }
    
}


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

    public function addOffre()
    {
        $this->connexion();
        $utilisateur = $this->_connexion->query("");
        return $utilisateur->fetch();
    }

    public function delOffre()
    {
        $this->connexion();
        $utilisateur = $this->_connexion->query("");
        return $utilisateur->fetch();
    }

    public function UpOffre()
    {
        $this->connexion();
        $utilisateur = $this->_connexion->query("");
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
            $this->_connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
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

    public function addEntreprise($nom, $secteur, $localite, $nbr_stagiaire, $evaluation, $confiance)
    {
        $this->connexion();
        $stmt = $this->_connexion->prepare("INSERT INTO projet.fiche_entreprise (Nom, Secteur_activite, Localite, Nb_stagiaire_cesi, evaluation_stagiaire, confiance_pilote) VALUES (?, ?, ?, ?, ?, ?);");
        $stmt -> bindValue(1, $nom, PDO::PARAM_STR); //Nom
        $stmt -> bindValue(2, $secteur, PDO::PARAM_STR); //Secteur_activite
        $stmt -> bindValue(3, $localite, PDO::PARAM_STR); //Localite
        $stmt -> bindValue(4, $nbr_stagiaire, PDO::PARAM_INT); //Nb_stagiaire_cesi
        $stmt -> bindValue(5, $evaluation, PDO::PARAM_INT); //evaluation_stagiaire
        $stmt -> bindValue(6, $confiance, PDO::PARAM_INT); //confiance_pilote
        return $stmt -> execute();
    }

    public function delEntreprise()
    {
        $this->connexion();
        $utilisateur = $this->_connexion->query("");
        return $utilisateur->fetch();
    }

    public function UpEntreprise()
    {
        $this->connexion();
        $utilisateur = $this->_connexion->query("");
        return $utilisateur->fetch();
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

    public function addEleve()
    {
        $this->connexion();
        $utilisateur = $this->_connexion->query("");
        return $utilisateur->fetch();
    }

    public function delEleve()
    {
        $this->connexion();
        $utilisateur = $this->_connexion->query("");
        return $utilisateur->fetch();
    }

    public function UpEleve()
    {
        $this->connexion();
        $utilisateur = $this->_connexion->query("");
        return $utilisateur->fetch();
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

    public function addPilote()
    {
        $this->connexion();
        $stmt = $this->_connexion->prepare("INSERT INTO projet.authentification (login, mdp) VALUES ( ?, ? ); INSERT INTO projet.user (nom, prenom, email, centre, ID_Role, id_auth) VALUES (?, ?, ?, ?, ?, ?); INSERT INTO projet.pilote (id_pilote, promotion_assignees, id_user) VALUES ('', ?, ?);");
        $query = .'%';
        $stmt -> bindValue(1, $query, PDO::PARAM_STR); //login
        $stmt -> bindValue(2, $query, PDO::PARAM_STR); //mdp
        $stmt -> bindValue(3, $query, PDO::PARAM_STR); //nom
        $stmt -> bindValue(4, $query, PDO::PARAM_STR); //prenom
        $stmt -> bindValue(5, $query, PDO::PARAM_STR); //email
        $stmt -> bindValue(6, $query, PDO::PARAM_STR); //centre
        $stmt -> bindValue(7, $query, PDO::PARAM_INT); //ID_Role
        $stmt -> bindValue(8, $query, PDO::PARAM_INT); //id_auth
        $stmt -> bindValue(9, $query, PDO::PARAM_STR); //promotion_assignees
        $stmt -> bindValue(10, $query, PDO::PARAM_INT); //id_user
        $stmt -> execute();
        return $stmt->fetch();
    }

    public function getOffrebyComp($competence)
    {
        $this->connexion();
        $stmt = $this->_connexion->prepare("SELECT * FROM offre_de_stage WHERE competences LIKE ?");
        $query = $competence.'%';
        $stmt -> bindValue(1, $query, PDO::PARAM_STR);
        $stmt -> execute();
        return $stmt->fetchAll();
    }

    public function delPilote()
    {
        $this->connexion();
        $utilisateur = $this->_connexion->query("");
        return $utilisateur->fetch();
    }

    public function UpPilote()
    {
        $this->connexion();
        $utilisateur = $this->_connexion->query("");
        return $utilisateur->fetch();
    }
}

// ######################### Recherche ##########################
class Recherche {
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

    public function getElevebyName($name)
    {
        $this->connexion();
        $stmt = $this->_connexion->prepare("SELECT * FROM user WHERE prenom LIKE ? and id_role=4");
        $query = $name.'%';
        $stmt -> bindValue(1, $query, PDO::PARAM_STR);
        $stmt -> execute();
        return $stmt->fetchAll();
    }

    public function getPilotebyName($name)
    {
        $this->connexion();
        $stmt = $this->_connexion->prepare("SELECT * FROM user WHERE prenom LIKE ? and id_role=2");
        $query = $name.'%';
        $stmt -> bindValue(1, $query, PDO::PARAM_STR);
        $stmt -> execute();
        return $stmt->fetchAll();
    }
    
    public function getEntreprisebyName($name)
    {
        $this->connexion();
        $stmt = $this->_connexion->prepare("SELECT * FROM fiche_entreprise WHERE nom LIKE ?");
        $query = $name.'%';
        $stmt -> bindValue(1, $query, PDO::PARAM_STR);
        $stmt -> execute();
        return $stmt->fetchAll();
    }

    public function getOffrebyComp($competence)
    {
        $this->connexion();
        $stmt = $this->_connexion->prepare("SELECT * FROM offre_de_stage WHERE competences LIKE ?");
        $query = $competence.'%';
        $stmt -> bindValue(1, $query, PDO::PARAM_STR);
        $stmt -> execute();
        return $stmt->fetchAll();
    }
}

// ######################### Wish liste ##########################
class WishListe {
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

    public function getWishListe()
    {
        $this->connexion();
        $utilisateur = $this->_connexion->query("");
        return $utilisateur->fetchAll();
    }

    public function AddWishListe()
    {
        $this->connexion();
        $utilisateur = $this->_connexion->query("");
        return $utilisateur->fetchAll();
    }

    public function delWishListe()
    {
        $this->connexion();
        $utilisateur = $this->_connexion->query("");
        return $utilisateur->fetchAll();
    }
}
?>