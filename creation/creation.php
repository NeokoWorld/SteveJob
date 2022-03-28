<?php
include '../Base/head.php';
echo '<link rel="stylesheet" href="creation.css">';
include '../Base/header.php';
echo '<main>
<div class="container">
    <div class="row">
        <form action="" method="post" class="text-center formu">
            <fieldset>
                <legend>Création d\'un compte</legend>
                <div class="row">
                    <div class="col-4"></div><div class="col-1"><input type="radio" name="compte" value="Pilote" required /></div>
                    <div class="col-1"><label for="Pilote">Pilote</label></div>
                    <div class="col-1"><input type="radio" name="compte" value="Eleve" required /></div>
                    <div class="col-1"><label for="Eleve">Eleve</label></div><div class="col-4"></div>
                    <div class="col-6"><label for="Nom">Nom</label></div>
                    <div class="col-6"><input type="text" name="Nom" placeholder="Saisissez votre nom" required/></div>
                    <div class="col-6"><label for="Prenom">Prenom</label></div>
                    <div class="col-6"><input type="text" name="Prenom" placeholder="Saisissez votre prénom" required/></div>
                    <div class="col-6"><label for="Centre">Centre</label></div>
                    <div class="col-6"><input type="text" name="Centre" placeholder="Saisissez votre centre de formation" required/></div>
                    <div class="col-6"><label for="Promotion">Promotion</label></div>
                    <div class="col-6"><input type="text" name="Promotion" placeholder="Indiquez votre promotion" required/></div>
                    <div class="col-3"></div><div class="col-3"><input type="submit" value="Envoyer" id="envoyer" /></div>
                    <div class="col-3"><input type="reset" value="Annuler" /></div><div class="col-3"></div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
</main>';
    include '../Base/footer.php';
    ?>