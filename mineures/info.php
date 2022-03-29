<?php
include '../Base/head.php';
echo '<link rel="stylesheet" href="info.css">';
include '../Base/header.php';
echo '<main>
<div class="container">
    <div class="row">
        <article class="col-sm-1"></article>
        <article class="col-sm-11">';
        require '../PHP/Class.php';
        $users = new Offre();
foreach($users->getOffre() as $user)
{   
    $date = new DateTime($user['date_offre']);
    $lien = "";
    $lien =  $user['id_offre']." ".$user['competences']." ".$user['localite']." ".$user['entreprise']." ".$user['duree']." ".$user['remuneration']." ". '€' ." ".date_format($date, 'd-m-Y')." ".$user['id_fiche']." ";
    echo "<div class=\"bdd\"><a href = './offre.php?idOffre=".$user['id_offre']."'>".$lien."</a></div>";
}
$users->getOffre();
        echo '</article>
    </div>
</div>
</main>';
include '../Base/footer.php';
?>