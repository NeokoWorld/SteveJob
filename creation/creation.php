<?php
include '../Base/head.php';
echo '<link rel="stylesheet" href="creation.css">';
include '../Base/header.php';
echo '<main>
<div class="container">
    <div class="row">
        <form action="" method="post" class="text-center">
            <fieldset>
                <legend>Création d\'un profil</legend>
                <div class="row">
                    <div class="col-4"></div><div class="col-1"><input type="radio" name="compte" value="Pilote" required /></div>
                    <div class="col-1"><label for="Pilote">Pilote</label></div>
                    <div class="col-1"><input type="radio" name="compte" value="Eleve" required /></div>
                    <div class="col-1"><label for="Eleve">Eleve</label></div><div class="col-4"></div>
                    
                    <div class="col-6"><label for="Nom">Nom</label></div>
                    <div class="col-6"><input type="text" name="Nom" placeholder="Saisissez votre nom" required/></div>
                    
                    <div class="col-6"><label for="Prenom">Prenom</label></div>
                    <div class="col-6"><input type="text" name="Prenom" placeholder="Saisissez votre prénom" required/></div>
                    
                    <div class="col-6"><label for="Email">Email</label></div>
                    <div class="col-6"><input type="email" name="Email" placeholder="Saisissez votre email" required/></div>
                    
                    <div class="col-6"><label for="Centre">Centre</label></div>
                    <div class="col-6"><input type="text" name="Promotion" placeholder="Saisissez votre centre de formation" required/></div>
                    
                    <div class="col-6"><label for="Promotion">Promotion</label></div>
                    <div class="col-6"><input type="text" name="Promotion" placeholder="Indiquez votre promotion" required/></div>
                    
                    <div class="col-3"></div><div class="col-3"><input type="submit" value="Envoyer" id="envoyer" /></div>
                    <div class="col-3"><input type="reset" value="Annuler" /></div><div class="col-3">
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
<a class="btn btn-secondary col-1 bout fixed-top" style="margin:56px 0; width: 53px; height:53px; outline:none; text-decoration:none" data-bs-toggle="offcanvas" href="#offcanvasExample"
                    role="button" aria-controls="offcanvasExample">
                    +
                </a>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel" style="width: 200px;">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel" style="color :black;">Menu</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body" style="color :black;">
                <a href="../profil/admin.php">Profil</a>
                <br></br>
                <a href="../listes/l-eleve.php">Liste des élèves</a>
                <br></br>
                <a href="../listes/l-pilote.php">Listes des pilotes</a>
                <br></br>
                <a href="../listes/l-entreprise.php">Listes des entreprises</a>
                <br></br>
                <a href="../creation/creation.php">Création</a>
                <br></br>
                <div>
                    <input type="button" action="" value="Déconnection" class="deco"/>
                </div>
            </div>
        </div>
</main>';
    include '../Base/footer.php';
    ?>