<?php 
    
    $hote = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "pageconnection";

    $connexion = new PDO("mysql:host=$hote; dbname=$dbname", $user, $pass);


?>