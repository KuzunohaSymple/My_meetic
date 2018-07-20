<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="../style.css">
        <title>Inscription</title>
    </head>
    <body>
        <form method="post" action="inscription.php">
            <section>
                <h3>Devenir membre</h3>
                <article>
                    <table>
                        <tr>
                            <td>Nom:</td>
                            <td><input type="text" name="surname"/><td/>
                        </tr>
                        <tr>
                            <td>Prénom:</td>
                            <td><input type="text" name="name"><td/>
                        </tr>
                        <tr>
                            <td>Date de naissance:</td>
                            <td><input type="datetime-local" name="naissance"/><td/>
                        </tr>
                        <tr>
                            <td colspan="2">Je suis un(e):</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="sexe" value="homme" id="homme" checked="checked" />
                                <label for="homme">Homme</label></td>
                            <td><input type="radio" name="sexe" value="femme" id="femme" />
                                <label for="femme">Femme</label><td/>
                        </tr>
                        <tr>
                            <td>Ville:</td>
                            <td><input type="text" name="ville"/><td/>
                        </tr>
                        <tr>
                            <td>E-mail:</td>
                            <td><input type="email" name="mail"/><td/>
                        </tr>
                        <tr>
                            <td>Mot de passe :</td>
                            <td><input type="password" name="mot_de_passe"/><td/>
                        </tr>
                    </table><br/>
                    <input type="submit" class="valider" value="Valider"/>
                </article>
                <article>
                <h4><a href="../index.php">Retour à la connexion</a></h4>
            </article>
            <?php include '../php/devenir_membre.php';
            if (isset($_POST['surname']) && isset($_POST['name']) && isset($_POST['naissance']) && isset($_POST['sexe'])
            && isset($_POST['ville']) && isset($_POST['mail']) && isset($_POST['mot_de_passe'])){
            $client = new inscription($_POST['surname'], $_POST['name'], $_POST['naissance'], $_POST['sexe'],
                $_POST['ville'], $_POST['mail'], $_POST['mot_de_passe']);
            $client->insertInto();
            }
            ?>
            </section>
        </form>
    </body>
</html>