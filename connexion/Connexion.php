<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main/Style.css">
    <title>Login</title>
</head>

<body>
<?php include_once '../base/NavBar.php';
    ?>
    <main class="bodylogin">
    <div class="logincontainer">
        <h2>Connexion</h2>
        <form action="" method="post">
            <div class="informationlogin">
                <div class="email">
                    <p>Email :</p>
                    <input type="email" placeholder="Entrez votre Email" required>
                </div>
                <div class="password">
                    <p>Password :</p>
                    <input type="Mot de Passe" placeholder="Entrez votre Mot de Passe" required>
                </div>
                <div class="lol">
                    <input class="Boutonenvoyer" type="submit" value="Envoyer">
                    <a href="./Loginoublié.php">Mot de passe Oublié</a>
                </div>
            </div>
        </form>
    </div>
</main>
<?php include_once '../base/footer.php';?>

</body>

</html>