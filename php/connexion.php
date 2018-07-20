<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=my_meetic;charset=utf8" , $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfuly";
    $GLOBALS['bdd'];

}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}