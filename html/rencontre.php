<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rencontre</title>
</head>
<body>
    <?php include "navigateur.php";
    include "../php/rechercher_ame_soeur.php";?>
    <?php if (isset($_SESSION['mail'])) { ?>
    <form method="post" action="rencontre.php?">
        <table>
        <tr>
            <td>Je recherche un(e):</td>
            <td><select name="genre">
                <option value="tous">------</option>
                <option value="femme">Femme</option>
                <option value="homme">Homme</option>
                </select></td>
        </tr>
        <tr>
            <td>Tranche d'âge:</td>
            <td><select name="age">
                <option value="tous">----</option>
                <option value="1">18/25</option>
                <option value="2">25/35</option>
                <option value="3">35/45</option>
                <option value="4">45+</option>
            </select></td>
        </tr>
         <tr>
             <td>Localisation:</td>
             <td><input type="text" name="localisation"/></td>
         </tr>
         <tr>
             <td></td>
             <td><input type="submit" value="Rechercher"/></td>
         </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['localisation'])) {
        $recherche = new rechercher($_POST['genre'], $_POST['age'], $_POST['localisation']);
        $information = $recherche->search();
        foreach ($information as $info)
        { ?>
            <table>
                <tr>
                    <td><?= $info['prenom'] ?></td>
                </tr>
                <tr>
                    <td><?php echo floor((time() - strtotime($info['date_naissance'])) / 3600 / 24 / 365); ?> ans<td>
                </tr>
                <tr>
                    <td>Sexe: <?= $info['sexe'] ?></td>
                </tr>
            </table>
    <?php
        }; ?>
        <?php
    }
//    else {
//        echo "Veuillez entrer le nom d'une ville pour effectuer la recherche<br/>";
//    }
    ?>
    <?php }
    else {
        echo "Vous n'êtes pas connecté, accès impossible<br/> <a href=\"../index.php\">Se connecter</a>";
    }?>

</body>
</html>