<?php
$mot_de_passe = "zouzou";
$password = password_hash($mot_de_passe, PASSWORD_DEFAULT);
echo $password;
echo "\n";
if (password_verify($mot_de_passe, $password)) {
    echo 'Le mot de passe est valide !';
} else {
    echo 'Le mot de passe est invalide.';
}
