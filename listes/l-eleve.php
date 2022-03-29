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
                    <article class="prof">Liste des élèves';
require '../PHP/Class.php';
$users = new Eleve();
if (isset($_GET['page']) && !empty($_GET['page'])) {
    $page = $_GET['page'] - 1;
} else {
    $page = 0;
}
foreach ($users->getEleve($page * 10) as $user) {
    echo '<div class="bdd"> ';
    echo $user['id_eleve'], " ";
    echo $user['nom'], " ";
    echo $user['prenom'], " ";
    echo $user['centre'], " ";
    echo $user['Promotion'], " ";
    echo $user['email'], " ";
    echo $user['id_user'], " ";
    echo '</div>';
}
$users->getEleve();
$toutesLignes = (int)$users->compterEleve();
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

<?php echo '</article>
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