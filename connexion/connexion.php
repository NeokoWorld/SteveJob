<?php
include '../Base/head.php';
echo '<link rel="stylesheet" href="connexion.css">';
include '../Base/header.php';
echo '<main>
        <div>
            <form method="post" action="">
                <fieldset>
                    <legend>Connexion</legend>
                    <div class="container">
                        <div class="row"><label class="col-sm-6">Email</label>
                            <input type="email" class="col-sm-6" placeholder="Entrez votre Email" id="Email" required />
                        </div>
                        <div class="row"><label class="col-sm-6">Mot de passe</label>
                            <input type="password" class="col-sm-6" placeholder="Entrez votre Mot de Passe" id="mdp"
                                minlength="8" required />
                        </div>
                    </div>
                    </br>
                    <input type="submit" value="Envoyer" id="envoyer" />
                </fieldset>
            </form>
            <a href="../connexion/mdp_oub.php">Mot de passe oublié ?</a>
        </div>
    </main>';
include '../Base/footer.php';
