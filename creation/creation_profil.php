<?php
session_start();
if (@$_SESSION['auth'] == true) {
    include '../Base/head.php';
    echo '<link rel="stylesheet" href="creation.css">';
    include '../Base/header.php';
?>

    <main>
        <div class="container">
            <div class="row">
                <form action="" method="post" class="text-center">
                    <fieldset>
                        <legend>Création d\'un profil</legend>

                        <div class="row">
                            <div class="col-2"><input type="radio" name="compte" value="2" required /></div>
                            <div class="col-2"><label for="Pilote">Pilote</label></div>

                            <div class="col-2"><input type="radio" name="compte" value="4" required /></div>
                            <div class="col-2"><label for="Eleve">Eleve</label></div>

                            <div class="col-2"><input type="radio" name="compte" value="3" required /></div>
                            <div class="col-2"><label for="Delegue">Delegue</label></div>


                            <div class="col-6"><label for="Login">Login</label></div>
                            <div class="col-6"><input type="text" name="Login" placeholder="Saisissez un login" required /></div>

                            <div class="col-6"><label for="Mdp">Mot de passe</label></div>
                            <div class="col-6"><input type="text" name="Mdp" placeholder="Saisissez un mot de passe" required /></div>

                            <div class="col-6"><label for="Nom">Nom</label></div>
                            <div class="col-6"><input type="text" name="Nom" placeholder="Saisissez un nom" required /></div>

                            <div class="col-6"><label for="Prenom">Prenom</label></div>
                            <div class="col-6"><input type="text" name="Prenom" placeholder="Saisissez un prenom" required /></div>

                            <div class="col-6"><label for="Email">Email</label></div>
                            <div class="col-6"><input type="email" name="Email" placeholder="Saisissez un email" required /></div>

                            <div class="col-6"><label for="Centre">Centre</label></div>
                            <div class="col-6"><input type="text" name="Centre" placeholder="Saississez votre centre" required /></div>

                            <div class="col-6"><label for="Promotion">Promotion</label></div>
                            <div class="col-6"><input type="text" name="Promotion" placeholder="Saississez votre promotion" required /></div>

                            <div class="col-3"></div>
                            <div class="col-3"><input type="submit" value="Envoyer" id="envoyer" /+></div>
                            <div class="col-3"><input type="reset" value="Annuler" /></div>
                            <div class="col-3">
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <a class="btn btn-secondary col-1 bout fixed-top" style="margin:56px 0; width: 53px; height:53px; outline:none; text-decoration:none" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            +
        </a>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="width: 200px;">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel" style="color :black;">Menu</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body" style="color :black;">
                <a href="../profil/admin.php">Profil</a>
                <br></br>
                <a href="../listes/l-eleve.php">Liste des élèves</a>
                <br></br>
                <a href="../listes/l-pilote.php">Listes des pilotes</a>
                <br></br>
                <a href="../listes/l-delegue.php">Listes des délegués</a>
                <br></br>
                <a href="../listes/l-entreprise.php">Listes des entreprises</a>
                <br></br>
                <a href="../listes/l-offre.php">Listes des offres de stage</a>
                <br></br>
                <a href="../creation/creation_profil.php">Création d\'un profil</a>
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
    
<?
    include '../Base/footer.php';
} else {
    header("Location:../connexion/connexion.php");
    exit;
}
?>