<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body class="bodylogin">
    <div class="logincontainer">
        <h2>Connexion</h2>
        <form action="" method="post">
            <div class="informationlogin">
                <div class="email">
                    <p>email :</p>
                    <input type="email" placeholder="entrez votre email" required>
                </div>
                <div class="password">
                    <p>Password :</p>
                    <input type="password" placeholder="entrez votre Password" required>
                </div>
                <div class="lol">
                    <input class="Boutonenvoyer" type="submit" value="Envoyer">
                    <a href="./Loginoublié.php">Mot de passe Oublié</a>
                </div>
            </div>
        </form>
    </div>

    <?php
    include_once('footer.php')
    ?>

</body>

</html>