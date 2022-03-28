<?php
include '../Base/head.php';
echo '<link rel="stylesheet" href="info.css">';
include '../Base/header.php';

echo '<main>
<div class="container">
    <div class="row">
        <article class="col-sm-1"></article>
        <article class="col-sm-11">';
        
$id_Offre = $_GET['idOffre'];
//echo ($id_Offre);

require '../PHP/Class.php';
$offres = new Offre();
$detail = $offres->getOffrebyID($id_Offre); 

echo "<div class=\"contenair\">

<div class='row' style='margin-top:50px;'>

<div class='row' style='margin-top:50px;'>
<div class='col-sm-6'>
<div class='col-sm-1'>ID_offre</div>
<div class='col-sm-11'><input type='text' class='col-sm-3' value=".$detail['id_offre']." /></div>
</div>

<div class='row' style='margin-top:50px;'>
<div class='col-sm-1'>Compétences</div>
<div class='col-sm-11'><input type='text' class='col-sm-3' value=".$detail['competences']." /></div>
</div>

<div class='row' style='margin-top:50px;'>
<div class='col-sm-1'>Localité(s)</div>
<div class='col-sm-11'><input type='text' class='col-sm-3' value=".$detail['localite']." /></div>
</div>

<div class='row' style='margin-top:50px;'>
<div class='col-sm-1'>Entreprise</div>
<div class='col-sm-11'><input type='text' class='col-sm-3' value=".$detail['entreprise']." /></div>
</div>

<div class='row' style='margin-top:50px;'>
<div class='col-sm-1'>Durée</div>
<div class='col-sm-11'><input type='text' class='col-sm-3' value=".$detail['duree']." /></div>
</div>

<div class='row' style='margin-top:50px;'>
<div class='col-sm-1'>Rémunération</div>
<div class='col-sm-11'><input type='text' class='col-sm-3' value=".$detail['remuneration']." /></div>
</div>

<div class='row' style='margin-top:50px;'>
<div class='col-sm-1'>Date_offre</div>
<div class='col-sm-11'><input type='text' class='col-sm-3' value=".$detail['date_offre']." /></div>
</div>

<div class='row' style='margin-top:50px;'>
<div class='col-sm-1'>ID_fiche</div>
<div class='col-sm-11'><input type='text' class='col-sm-3' value=".$detail['id_fiche']." /></div>
</div>
</div>";

echo"<div class='col-sm-6'>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
</div>
</div>";

echo "</div>";
echo '</main>';

include '../Base/footer.php';
