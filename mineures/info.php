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
    $lien = "";
    /*echo '<pre>';
    echo $user['id_offre'] , " " ;
    echo $user['competences'] , " ";
    echo $user['localite'] , " ";
    echo $user['entreprise'] , " ";
    echo $user['duree'] , " ";
    echo $user['remuneration'] , " ";
    echo $user['date_offre'] , " ";
    echo $user['id_fiche'] , " ";
    echo '</pre>';*/

    $lien =  $user['id_offre']." ".$user['competences']." ".$user['localite']." ".$user['entreprise']." ".$user['duree']." ".$user['remuneration']." ".$user['date_offre']." ".$user['id_fiche']." ";

    echo "<div class=\"bdd\"><a href = './offre.php?idOffre=".$user['id_offre']."'>".$lien."</a></div>";
}
$users->getOffre();
        echo '</article>
    </div>
</div>
</main>';
include '../Base/footer.php';
?>