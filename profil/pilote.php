<?php
session_start();
if (@$_SESSION['auth'] == true) {
    include '../Base/head.php';
    echo '<link rel="stylesheet" href="profils.css">';
    include '../Base/header.php';
?>

    <main>
        <div class="container case">
            <div class="row case">
                <a class="btn btn-secondary col-1 bout fixed-top" style="margin:56px 0; width: 53px; height:53px;" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    +
                </a>
                <div class="text-center col-11">
                    <article class="prof"> Profil
                        <div style="width: 65%; margin:auto;">
                            <img src="../assets/images/pilote.jpg"></img>
                            <br>
                            <div class="row" style="margin-top:50px;">
                                <div class="col-sm-1">Prénom</div>
                                <div class="col-sm-11"><input type="prenom" class="col-sm-6" placeholder="Prenom" id="prenom" required /></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-1">Nom</div>
                                <div class="col-sm-11"><input type="Nom" class="col-sm-6" placeholder="Nom" id="nom" required /></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-1">Email</div>
                                <div class="col-sm-11"><input type="Email" class="col-sm-6" placeholder="Email" id="email" required /></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-1">Etablissement</div>
                                <div class="col-sm-11"><input type="Etablissement" class="col-sm-6" placeholder="Etablissement" id="etablisement" required /></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-1">Promotion</div>
                                <div class="col-sm-11"><input type="Promotion" class="col-sm-6" placeholder="Promotion" id="promotion" required /></div>
                            </div>
                            <br>
                        </div>
                    </article>
                </div>
            </div>
        </div>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="width: 200px;">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel" style="color :black;">Menu</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body" style="color :black;">
                <a href="pilote.php">Profil</a>
                <br></br>
                <a href="../listes/l-eleve.php">Liste d\'élèves</a>
                <br></br>
                <a href="../listes/l-delegue.php">Liste des délegués</a>
                <br></br>
                <a href="../listes/l-entreprise.php">Listes des entreprises</a>
                <br></br>
                <a href="../listes/l-offre.php">Listes des offres de stage</a>
                <br></br>
                <a href="../creation/creation_entreprise.php">Création d\'une entreprise</a>
                <br></br>
                <a href="../creation/creation_offre.php">Création d\'une offre</a>
                <br></br>
                <div>
                    <a class="deco" href="../deco/deconnexion.php">Deconnexion</a>
                </div>
            </div>
        </div>
    </main>

<?php
    include '../Base/footer.php';
} else {
    header("Location:../connexion/connexion.php");
    exit;
}
?>