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
                        <img src="../assets/images/btp.jpg" class="d-block w-100" alt="BTP">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/images/info.jpg" class="d-block w-100" alt="INFO">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/images/s3e.jpg" class="d-block w-100" alt="S3E">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/images/gene.jpg" class="d-block w-100" alt="GENE">
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
            <section>BDD</section>
            
        </div>
    </main>';
    include '../Base/footer.php';
    ?>