<?php
include '../Base/head.php';
echo '<link rel="stylesheet" href="mainPage.css">';
include '../Base/header.php';
echo '<main>
        <div>
            <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <a href = "https://www.ladepeche.fr/2022/03/23/plan-resilience-un-premier-signal-pour-le-btp-10188453.php">
                        <img src="../assets/images/btp.jpg" class="d-block w-100" alt="BTP">
                    </a>
                    </div>
                    <div class="carousel-item">
                    <a href = "https://www.nextinpact.com/lebrief/68725/linformatique-en-deuil-deces-stephen-wilhite-createur-gif-et-john-roach-visionnaire-pc">
                        <img src="../assets/images/info.jpg" class="d-block w-100" alt="INFO">
                    </a>
                    </div>
                    <div class="carousel-item">
                    <a href = "https://www.sudouest.fr/landes/gabarret/gabarret-le-retour-des-microfusees-9946872.php">
                        <img src="../assets/images/s3e.jpg" class="d-block w-100" alt="S3E">
                    </a>
                    </div>
                    <div class="carousel-item">
                    <a href = "https://www.sudouest.fr/politique/education/formation-en-charente-le-cesi-renforce-son-offre-postbac-pres-d-angouleme-9467345.php">
                        <img src="../assets/images/gene.jpg" class="d-block w-100" alt="GENE">
                    </a>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        </br>
        <div class="text-center" style="width:75%;margin:auto;">
            <section>Offre de stage';
require '../PHP/Class.php';

$users = new Offre();
foreach ($users->getOffre() as $user) {
    echo '<pre>';
    echo $user['id_offre'] , " " ;
    echo $user['competences'] , " ";
    echo $user['localite'] , " ";
    echo $user['entreprise'] , " ";
    echo $user['duree'] , " ";
    echo $user['remuneration'] , " ";
    echo $user['date_offre'] , " ";
    echo $user['id_fiche'] , " ";
    echo '</pre>';
}
$users->getOffre();

echo '</section> 
    </div>
    </main>';
include '../Base/footer.php';
