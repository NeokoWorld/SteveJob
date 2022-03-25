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
                    <div class="col-3"><input type="radio" name="compte" value="Pilote" required /></div>
                    <div class="col-3"><label for="Pilote">Pilote</label></div>
                    <div class="col-3"><input type="radio" name="compte" value="Eleve" required /></div>
                    <div class="col-3"><label for="Eleve">Eleve</label></div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
</main>';
    include '../Base/footer.php';
    ?>