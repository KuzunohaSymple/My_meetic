<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier mes informations</title>
</head>
<body>
    <form method="post" action="modifier_mes_informations.php">
    <?php include "navigateur.php"; ?>
    <?php
    include "../php/modifier.php";
    include "../php/recapitulatif_information.php";
    if (isset($_SESSION['mail']))
    {
        $recap = new information($_SESSION['mail']);
        $frite = $recap->return_information();
        $age = $recap->return_age();
        foreach ($frite as $requet)
            {
               ?>
        <h3>Modifier mes informations</h3>
        <h3>Bonjour, <?= $requet['nom'] . " " . $requet['prenom'];?></h3>
                <table>
                    <tr>
                        <td>Nom: </td>
                        <td><?=$requet['nom'];?></td>
                        <td><input type="text" name="nom"/></td>
                        <td><input type="submit" value="Modifier"/></td>
                    </tr>
                    <tr>
                        <td>Prenom: </td>
                        <td><?=$requet['prenom'];?></td>
                        <td><input type="text" name="prenom"/></td>
                        <td><input type="submit" value="Modifier"/></td>
                    </tr>
                    <tr>
                        <td>Age: </td>
                        <td><?=$age;?></td>
                        <td><input type="datetime-local" name="naissance"/></td>
                        <td><input type="submit" value="Modifier"/></td>
                    </tr>
                    <tr>
                        <td>Sexe: </td>
                        <td><?=$requet['sexe'];?></td>
                        <td>
                            <select name="sexe">
                                <option value="">------</option>
                                <option value="Homme">Homme</option>
                                <option value="Femme">Femme</option>
                            </select>
                        </td>
                        <td><input type="submit" value="Modifier"/></td>
                    </tr>
                    <tr>
                        <td>Ville: </td>
                        <td><?=$requet['ville'];?></td>
                        <td><input type="text" name="ville"/></td>
                        <td><input type="submit" value="Modifier"/></td>
                    </tr>
                    <tr>
                        <td>Mail: </td>
                        <td><?=$requet['email'];?></td>
                        <td><input type="email" name="email"/></td>
                        <td><input type="submit" value="Modifier"/></td>
                    </tr>
                </table>
                <?php  }
                }
                else {
                    echo "Vous n'êtes pas connecté, accès impossible.<br/>
<a href=\"../index.php\">Se connecter</a><br/>";
                }?>
            </form>
</body>
</html>
