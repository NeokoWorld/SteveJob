<?php
session_start();
if(@$_SESSION['auth']==true){
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
                    <article class="prof">Liste des délegués';
require '../PHP/Class.php';
$users = new Delegue();
if (isset($_GET['page']) && !empty($_GET['page'])) {
    $page = $_GET['page'] - 1;
} else {
    $page = 0;
}
foreach ($users->getDelegue($page * 10) as $user) 
{
    $lien = "";
    $lien =  $user['nom']." "."|"." ".$user['prenom']." "."|"." ".$user['centre']." "."|"." ".$user['email']." "."|"." ".$user['id_user']." ";
    echo "<div class=\"bdd\"><a class=\"joie\" href = '../profil/jean.php?idUser=".$user['id_user']."'><b>".$lien."</b></a></div>"; 
}
$users->getDelegue();

$toutesLignes = (int)$users->compterDelegue();
$totoalPages = ceil($toutesLignes / 10);
if (isset($_GET['page']) && !empty($_GET['page'])) {
    $currentPage = (int) strip_tags($_GET['page']) - 1;
} else {
    $currentPage = 0;
};

?>

<nav>
    <ul class="pagination justify-content-center">
        <li class="page-item <?php if ($page <= 0) {
                                    echo 'disabled';
                                } ?>">
            <a class="page-link" href="<?php if ($page < 0) {
                                            echo '#';
                                        } else {
                                            echo "?page=" . ($currentPage - 1);
                                        } ?>">Precedent</a>
        </li>
        <?php for ($i = 1; $i <= $totoalPages; $i++) : ?>
            <li class="page-item <?php if (($page + 1) == $i) {
                                        echo 'active';
                                    } ?>">
                <a class="page-link" href="?page=<?= $i; ?>"><?= $i; ?></a>
            </li>
        <?php endfor; ?>
        <li class="page-item <?php if (($page + 1) >= $totoalPages) {
                                    echo 'disabled';
                                } ?>">
            <a class="page-link" href="<?php if ($page >= $totoalPages) {
                                            echo '#';
                                        } else {
                                            echo "?page=" . ($currentPage + 2);
                                        } ?>">Suivant</a>
        </li>
    </ul>
</nav>

</article>
<form method="get" action="../delete/delete.php">
            <span><input type="id" name="id_fiche" placeholder="Saisissez l\'id" required/></span>
                <span><input type="submit" value="Supprimer" name="supprimer" /></span>
                </form>
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
                            <a class="navbar-brand pad" href="../profil/admin.php">Profil</a><br></br>
                            <a href="../listes/l-eleve.php">Liste des élèves</a>
                            <br></br>
                            <a href="../listes/l-pilote.php">Listes des pilotes</a>
                            <br></br>
                            <a href="../listes/l-entreprise.php">Listes des entreprises</a>
                            <br></br>
                            <a href="../creation/creation_profil.php">Création de profil</a>
                            <br></br>
                            <a href="../creation/creation_entreprise.php">Création d'une entreprise</a>
                            <br></br>
                            <a href="../creation/creation_offre.php">Création d'une offre</a>
                            <br></br>
                <div>
                    <a class="deco" href="../deco/deconnexion.php">Deconnexion</a>
                </div>
            </div>
        </div>
    </main>

<?php echo include '../Base/footer.php';
}else{
    header("Location:../connexion/connexion.php");
    exit;
}
?>