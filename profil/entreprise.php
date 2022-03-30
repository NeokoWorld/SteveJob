<?php
session_start();
include '../Base/head.php';
echo '<link rel="stylesheet" href="entreprise.css">';
include '../Base/header.php';

    echo'<main>
        <div class="container">
            <div class="row">
                <a class="btn btn-secondary col-1 bout fixed-top" style="margin:56px 0; width: 53px; height:53px;" data-bs-toggle="offcanvas" href="#offcanvasExample"
                    role="button" aria-controls="offcanvasExample">
                    +
                </a>
                <div class="text-center col-11">
                    <article class="prof"> Profil
                        <div style="width: 65%; margin:auto;">
                            <img src="../assets/images/entreprise.png"></img>
                            <br>
                            <div class="row" style="margin-top:50px;">
                                <div class="col-sm-1">Nom</div>
                                <div class="col-sm-11"><input type="Nom" class="col-sm-6" placeholder="Nom"
                                        id="nom" required /></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-1">Secteur(s) d\'activité</div>
                                <div class="col-sm-11"><input type="Secteur" class="col-sm-6" placeholder="Secteur d\'activité"
                                        id="secteur" required /></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-1">Localité(s)</div>
                                <div class="col-sm-11"><input type="Localité" class="col-sm-6" placeholder="Localité(s)"
                                        id="localité" required /></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-1">Nombre de stagiaire</div>
                                <div class="col-sm-11"><input type="Nombre" class="col-sm-6" placeholder="Nombre de stagiaire" 
                                    id="nbr_stagiaire" required /></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-1">Confiance du pilote</div>
                                <div class="col-sm-11"><input type="Confiance" class="col-sm-6" placeholder="Confiance du pilote"
                                        id="confiance" required /></div>
                            </div>
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
?>