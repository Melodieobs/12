<?php
    
    require_once("../dbLog.php");

    if ($connexion) {
        $username = $_POST['user_name'];
        $email = $_POST['user_email'];
        $password = $_POST ['user_password'];
        $userPfp = $_POST ['user_img'];



        $signingInReturn = $connexion->query("INSERT INTO users (user_name, user_email, user_password, user_img) VALUES ('$username', '$email', '$password', '$userPfp')");


        echo "Votre inscription a bien été effectué !";
    }




?>