<?php
echo '</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand pad" href="../connexion/connexion.php">Connexion</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav w-100 justify-content-between">
                        <a class="nav-link active" aria-current="page" href="../mainpage/mainPage.php">Home</a>
                        <a class="nav-link" href="../mineures/info.html">Informatique</a>
                        <a class="nav-link" href="../mineures/btp.html">BTP</a>
                        <a class="nav-link" href="../mineures/gene.html">Généraliste</a>
                        <a class="nav-link" href="../mineures/s3e.html">S3E</a>
                        <a class="nav-link" href="../lettrecv/lettrecv.html">CV et Lettre de Motivation</a>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-secondary" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>';
?>