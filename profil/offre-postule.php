<?php
include '../Base/head.php';
echo '<link rel="stylesheet" href="offre-postule.css">';
include '../Base/header.php';
?>

<main>
    <div class="container">
        <div class="row">
            <a class="btn btn-secondary col-1 bout fixed-top" style="margin:56px 0; width: 53px; height:53px;" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                +
            </a>
            <div class="text-center col-11">
                <article class="prof"> Offre de stage postulée par l\'étudiant
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
            <a href="eleve.php">Profil</a>
            <br></br>
            <a href="wish.php">Wish-Liste</a>
            <br></br>
            <a href="offre.php">Offre de stage postulée</a>
            <br></br>
            <div>
                <a class="deco" href="../deco/deconnexion.php">Deconnexion</a>
            </div>
        </div>
    </div>
</main>

<?php include '../Base/footer.php'; ?>