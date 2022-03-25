<?php
include '../Base/head.php';
echo '<link rel="stylesheet" href="liste.css">';
include '../Base/header.php';

echo '<main>
        <div class="container">
            <div class="row">
                <a class="btn btn-secondary col-1 bout fixed-top" style="margin:56px 0; width: 53px; height:53px;" data-bs-toggle="offcanvas" href="#offcanvasExample"
                    role="button" aria-controls="offcanvasExample">
                    +
                </a>
                <div class="text-center col-11">
                    <article class="prof">Liste des entreprises';
                    require '../PHP/Class.php';
                    $users = new Entreprise();
                    foreach($users->getEntreprise() as $user)
                    {   
                        echo '<pre>';
                        echo $user['id_fiche'] , " " ;
                        echo $user['Nom'] , " ";
                        echo $user['Secteur_activite'] , " ";
                        echo $user['Localite'] , " ";
                        echo $user['Nb_stagiaire_cesi'] , " ";
                        echo $user['evaluation_stagiaire'] , " ";
                        echo $user['confiance_pilote'] , " ";
                        echo '</pre>';
                    }
                    $users->getEntreprise();
                    
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
                <a href="../profil/admin.html">Profil</a>
                <br></br>
                <a href="../listes/l-eleve.html">Liste des élèves</a>
                <br></br>
                <a href="../listes/l-pilote.html">Listes des pilotes</a>
                <br></br>
                <a href="../listes/l-entreprise.html">Listes des entreprises</a>
                <br></br>
                <a href="../listes/l-entreprise.html">Création</a>
                <br></br>
                <div>
                    <input type="button" action="" value="Déconnection" class="deco"/>
                </div>
            </div>
        </div>
    </main>';
include '../Base/footer.php';
?>
