<?php 

    $hote = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "crud-pkmn";

    $connexion = new PDO("mysql:host=$hote; dbname=$dbname", $user, $pass);
?>
