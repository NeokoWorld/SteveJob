<?php
session_start();
if(@$_SESSION['auth']==true){
include '../Base/head.php';
echo '<link rel="stylesheet" href="profils.css">';
include '../Base/header.php';

$id_Fiche = $_GET['idFiche'];
require '../PHP/Class.php';
$entreprises = new Entreprise();
$detail = $entreprises->getEntreprisebyID($id_Fiche);

    echo'<main>
        <div class="container case">
            <div class="row case">
                <div class="text-center col-11">
                    <article class="prof">
                        <div style="width: 65%; margin:auto;">
                            <img src="../assets/images/entreprise.png"></img>
                            <br>
                            <div class="row" style="margin-top:50px;">
                                <div class="col-sm-3">ID_entreprise</div>
                                <div class="col-sm-8"><input type="id" class="col-sm-6" placeholder="id_fiche" disabled = "disabled" style="font-weight:bold;" id="id_fiche" value="'.$detail['id_fiche'].'" required /></div>
                            </div>
                            <div class="row" style="margin-top:50px;">
                                <div class="col-sm-3">Nom</div>
                                <div class="col-sm-8"><input type="text" class="col-sm-6" placeholder="Nom" disabled = "disabled" style="font-weight:bold;" id="nom" value="'.$detail['Nom'].'" required /></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-3">Secteur(s) d\'activité</div>
                                <div class="col-sm-8"><input type="text" class="col-sm-6" placeholder="Secteur d\'activité" disabled = "disabled" style="font-weight:bold;" id="secteur" value="'.$detail['Secteur_activite'].'" required /></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-3">Localité(s)</div>
                                <div class="col-sm-8"><input type="text" class="col-sm-6" placeholder="Localité(s)" disabled = "disabled" style="font-weight:bold;" id="localité" value="'.$detail['Localite'].'" required /></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-3">Nombre de stagiaire</div>
                                <div class="col-sm-8"><input type="text" class="col-sm-6" placeholder="Nombre de stagiaire" disabled = "disabled" style="font-weight:bold;" id="nbr_stagiaire" value="'.$detail['Nb_stagiaire_cesi'].'" required /></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-3">Evaluation de l\'entreprise</div>
                                <div class="col-sm-8"><input type="text" class="col-sm-6" placeholder="Evalution de l\'entreprise" disabled = "disabled" style="font-weight:bold;" id="evalution" value="'.$detail['evaluation_stagiaire'].' / 5" required /></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-3">Confiance du pilote</div>
                                <div class="col-sm-8"><input type="text" class="col-sm-6" placeholder="Confiance du pilote" disabled = "disabled" style="font-weight:bold;" id="confiance" value="'.$detail['confiance_pilote'].' / 5" required /></div>
                            </div>
                            <br>
                            <form method="post" action="../profil/offre-cree.php">
                                <span><input type="submit" value="Offres de stage" name="afficher" /></span>
                            </form>
                            <br>
                        </div>
                    </article>
                </div>
            </div>
        </div>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel" style="width: 200px;">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel" style="color :black;">Menu</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body" style="color :black;">
                <a href="entreprise.php">Profil</a>
                <br></br>
                <a href="stat.php">Statistiques</a>
                <br></br>
                <a href="offre-cree.php">Offres de stage</a>
                <br></br>
                <div>
                    <a class="deco" href="../deco/deconnexion.php">Deconnexion</a>
                </div>
            </div>
        </div>
    </main>';
include '../Base/footer.php';
}else{
    header("Location:../connexion/connexion.php");
    exit;
}
?>