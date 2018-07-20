<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>my_meetic</title>
    </head>
    <body>
<!--    --><?php //if (!isset($_SESSION['mail'])) { ?>
        <section>
            <form method="post" action="index.php">
                <h1>My Meetic<img src="image/coeur.gif" alt="photo_de_coeur"/></h1>
                <article>
                    <h3>Connexion</h3>
                    <table>
                        <tr>
                            <td>Email :</td>
                            <td><input type="email" name="email"/></td>
                        </tr>
                        <tr>
                            <td>Mot de passe :</td>
                            <td><input type="password" name="password"/><td/>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="valider"><input type="submit" class="valider" value="Se Connecter"/></td>
                        </tr>
                    </table>
                </article>
                <article>
                    <h4><a href="html/inscription.php">---> S'inscrire <---</a></h4>
                </article>
                <?php include "php/devenir_membre.php";
                if (isset($_POST['email']) && isset($_POST['password'])) {
                    $connexion = new connexion($_POST['email'], $_POST['password']);
                    $connexion->identifiant();
                };?>
            </form>
        </section>
<!--    --><?php //} else {
//        echo "Vous êtes déjà connecté";
//    }?>
        
    </body>
</html>
