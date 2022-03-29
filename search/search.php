<?php
include '../Base/head.php';
echo '<link rel="stylesheet" href="search.css">';
include '../Base/header.php';

echo '<main>
        <div class="container">
            <div class="row">
                <a class="btn btn-secondary col-1 bout fixed-top" style="margin:56px 0; width: 53px; height:53px;" data-bs-toggle="offcanvas" href="#offcanvasExample"
                    role="button" aria-controls="offcanvasExample">
                    +
                </a>
                <div class="text-center col-11">
                    <article class="prof">Liste des résultats';

require'../PHP/Class.php';

$names = new Recherche();
foreach ($names->getElevebyName($_GET['Recherche']) as $name) {
    echo '<div class="eleve"> ';
    echo "<h5><strong>Etudiant</strong></h5>";
    echo $name['nom'], " ";
    echo $name['prenom'], " ";
    echo $name['centre'], " ";
    echo $name['email'], " ";
    echo $name['id_user'], " ";
    echo '</div>';
}
$names->getElevebyName($_GET['Recherche']);

$names = new Recherche();
foreach ($names->getPilotebyName($_GET['Recherche']) as $name) {
    echo '<div class="pilote"> ';
    echo "<h5><strong>Pilote</strong></h5>";
    echo $name['nom'], " ";
    echo $name['prenom'], " ";
    echo $name['centre'], " ";
    echo $name['email'], " ";
    echo $name['id_user'], " ";
    echo '</div>';
}
$names->getPilotebyName($_GET['Recherche']);

$names = new Recherche();
foreach ($names->getEntreprisebyName($_GET['Recherche']) as $name) {
    echo '<div class="entreprise"> ';
    echo "<h5><strong>Entreprise</strong></h5>";
    echo $name['Nom'], " ";
    echo $name['Secteur_activite'], " ";
    echo $name['Localite'], " ";
    echo $name['Nb_stagiaire_cesi'], " ";
    echo $name['evaluation_stagiaire'], "/5" , " ";
    echo $name['confiance_pilote'], "/5" , " ";
    echo '</div>';
}
$names->getEntreprisebyName($_GET['Recherche']);

echo '</article>
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
                <a href="">Profil</a>
                <br></br>
                <div>
                    <input type="button" action="" value="Déconnection" class="deco"/>
                </div>
            </div>
        </div>
    </main>';

include '../Base/footer.php';
?>