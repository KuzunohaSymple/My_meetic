<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paramètre du compte</title>
</head>
<body>
    <?php include "navigateur.php";
    include "../php/supprimer_compte.php"?>
    <?php if (isset($_SESSION['mail'])) { ?>
    <form method="post" action="parametre_du_compte.php">
        <h3>Compte:</h3>
            <input type="submit" name="deconnexion" value="Deconnexion"/><br/><br/>
        <h3>Supprimer mon compte:</h3>
        <table>
            <tr>
                <td>Email: </td>
                <td><input type="email" name="mail"/></td>
            <tr>
                <td>Mot de passe: </td>
                <td><input type="password" name="password"</td>
            <tr>
                <td><input type="submit" value="Supprimer son compte"</td>
            </tr>
        </table>
    </form>
    <?php }
    else {
        echo "Vous n'êtes pas connecté, accès impossible<br/> <a href=\"../index.php\">Se connecter</a>";
    }?>
</body>
</html>