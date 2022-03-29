<?php
include '../Base/head.php';
echo '<link rel="stylesheet" href="liste.css">';
include '../Base/header.php';

    echo'<main>
        <div class="container">
            <div class="row">
                <a class="btn btn-secondary col-1 bout fixed-top" style="margin:56px 0; width: 53px; height:53px;" data-bs-toggle="offcanvas" href="#offcanvasExample"
                    role="button" aria-controls="offcanvasExample">
                    +
                </a>
                <div class="text-center col-11">
                    <article class="prof">Liste des pilotes';
                    require '../PHP/Class.php';
                    $users = new Pilote();
                    foreach($users->getPilote() as $user)
                    {   
                        echo '<div class="bdd">';
                        echo $user['id_pilote'] , " " ;
                        echo $user['nom'] , " ";
                        echo $user['prenom'] , " ";
                        echo $user['email'] , " ";
                        echo $user['centre'] , " ";
                        echo $user['promotion_assignees'] , " ";
                        echo $user['id_user'] , " ";
                        echo '</div>';
                    }
                    $users->getPilote();
                    echo'</article>
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