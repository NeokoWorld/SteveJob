<?php
include '../Base/head.php';
echo '<link rel="stylesheet" href="info.css">';
include '../Base/header.php';


$id_Offre = $_GET['idOffre'];
require '../PHP/Class.php';
$offres = new Offre();
$detail = $offres->getOffrebyID($id_Offre);
$date = new DateTime($detail['date_offre']);
?>

<main>
    <div class="container">
        <div class="row">
            <article class="col-sm-6 hauteur">
                <img src="../assets/images/entreprise.png" class="rounded mx-auto d-block" style="height:20%; margin-top:10px;"></img>
                <div class="row bdd" style="margin-top:25px;">
                    <div class="col-sm-3">Entreprise</div>
                    <div class="col-sm-8"><input type="text" class="col-sm-6" disabled="disabled" style="font-weight:bold;" value="'.$detail['entreprise'].'" /></div>
                </div>
                <div class="row bdd" style="margin-top:25px;">
                    <div class="col-sm-3">Localité(s)</div>
                    <div class="col-sm-8"><input type="text" class="col-sm-6" disabled="disabled" style="font-weight:bold;" value="'.$detail['localite'].'" /></div>
                </div>
                <div class="row bdd" style="margin-top:25px;">
                    <div class="col-sm-3">Compétence(s)</div>
                    <div class="col-sm-8"><input type="text" class="col-sm-6" disabled="disabled" style="font-weight:bold;" value="'.$detail['competences'].'" /></div>
                </div>
                <div class="row bdd" style="margin-top:25px;">
                    <div class="col-sm-3">Rémunération</div>
                    <div class="col-sm-8"><input type="text" class="col-sm-6" disabled="disabled" style="font-weight:bold;" value="'.$detail['remuneration']. " € ".'" /></div>
                </div>
                <div class="row bdd" style="margin-top:25px;">
                    <div class="col-sm-3">Durée du stage</div>
                    <div class="col-sm-8"><input type="text" class="col-sm-6" disabled="disabled" style="font-weight:bold;" value="'.$detail['duree']. " semaines".'" /></div>
                </div>
                <div class="row bdd" style="margin-top:25px;">
                    <div class="col-sm-3">Date mise en ligne</div>
                    <div class="col-sm-8"><input type="text" class="col-sm-6" disabled="disabled" style="font-weight:bold;" value="'.date_format($date,'d-m-Y').'" /></div>
                </div>
                <div class="row bdd" style="margin-top:25px;">
                    <div class="col-sm-3">ID Entreprise</div>
                    <div class="col-sm-8"><input type="text" class="col-sm-6" disabled="disabled" style="font-weight:bold;" value="'.$detail['id_fiche'].'" /></div>
                </div>
                <div class="row bdd" style="margin-top:25px;">
                    <div class="col-sm-3">ID Offre</div>
                    <div class="col-sm-8"><input type="text" class="col-sm-6" disabled="disabled" style="font-weight:bold;" value="'.$detail['id_offre'].'" /></div>
                </div>
            </article>
            <article class="col-sm-6">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                </p>
            </article>

        </div>
    </div>
</main>

<?php include '../Base/footer.php'; ?>