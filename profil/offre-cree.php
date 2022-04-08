<?php
include '../Base/head.php';
echo '<link rel="stylesheet" href="offres.css">';
include '../Base/header.php';
?>

<main>
    <div class="container">
        <div class="row">
            <div class="text-center col-11">
                <article class="prof"> Offres de stage créés par l\'entreprise
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
</main>

<?php include '../Base/footer.php'; ?>