<?php
include '../Base/head.php';
echo '<link rel="stylesheet" href="info.css">';
include '../Base/header.php'; 
?>

<main>
    <div class="container">
        <div class="row">
            <!-- <article class="col-1" style="text-align:center;">Filtrage</article> -->
            <article class="col-12">
                <?php require '../PHP/Class.php';
                $users = new Offre();
                if (isset($_GET['page']) && !empty($_GET['page'])) {
                    $page = $_GET['page'] - 1;
                } else {
                    $page = 0;
                }
                foreach ($users->getOffre($page * 10) as $user) {
                    $date = new DateTime($user['date_offre']);
                    $lien = "";
                    $lien =  $user['id_offre'] . " " . "|" . " " . $user['competences'] . " " . "|" . " " . $user['localite'] . " " . "|" . " " . $user['entreprise'] . " " . "|" . " " . $user['duree'] . " " . " semaines" . " " . "|" . " " . $user['remuneration'] . " " . '€' . " " . "|" . " " . date_format($date, 'd-m-Y') . " " . "|" . " " . $user['id_fiche'] . " ";
                    echo "<div class=\"bdd\"><a class=\"joie\" href = './offre.php?idOffre=" . $user['id_offre'] . "'><b>" . $lien . "</b></a></div>";
                }
                $users->getOffre();
                $toutesLignes = (int)$users->compterOffre();
                $totoalPages = ceil($toutesLignes / 10);
                if (isset($_GET['page']) && !empty($_GET['page'])) {
                    $currentPage = (int) strip_tags($_GET['page']) - 1;
                } else {
                    $currentPage = 0;
                } ?>

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
        </div>
    </div>
</main>

<?php include '../Base/footer.php'; ?>