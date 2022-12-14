<?php

    require_once("./user/conn.php");


    $username = $mail = $password = $confirmedPassword = $userPfp = "";
    $errUserName = $errPassword = $errConfirmedPassword = $errMail = $errPfp = "";

    $aa ="";

    if ($connexion) {


    if (!empty($_POST)) {
            extract($_POST);
        }



    if (isset($_POST["inscription"])) {
        $username = trim($_POST["user_name"]);
        $mail = trim($_POST["user_email"]);
        $password = trim($_POST["user_password"]);
        $confirmedPassword = trim($_POST["user_confirmedPassword"]);
        $userPfp = trim($_POST["user_img"]);




        /* verification username */
        if (empty($username)) {
            $errUserName = "Ce champ doit être rempli";
        } 
        else {
            if (!preg_match('/^[a-zA-Z0-9_]/', $username)) {
                $errUserName = "Le nom d'utilisateur peut seulement contenir des lettres, des nombres et des underscores";
            }
        }


        /* verification mail */
        if (empty($mail)) {
            $errMail = "Ce champ doit être rempli";
        } else {
            /* if (!preg_match('/^[a-zA-Z0-9._]/', $mail)) {
                 aaa 
            } */
            if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                $errMail = "Votre adresse Email n'est pas conforme.";
            }
        }


        /* verification password */
        if (empty($password)) {
            $errPassword = "Ce champ doit être rempli.";
        } else {
            if (strlen($password) < 6) {
                $errPassword = "Votre mot de passe doit au moins faire 6 charactère de long.";
            }
            if (!preg_match('/[A-Z]/', $password)  || !preg_match('/\d/', $password) ) {
                $errPassword = "Votre mot de passe doit contenir au moins une majuscule et au moins un chiffre.";
            }
            
        }


        /* verification confirmation password */
        if (empty($confirmedPassword)) {
            $errConfirmedPassword = "Ce champ doit être rempli.";
        } else {
            if ($password != $confirmedPassword) {
                $errConfirmedPassword = "Vos mots de passes ne correspondent pas.";
            }
        }


        /* verification pfp */
        if (!empty($userPfp)) {
            
            if (!filter_var($userPfp, FILTER_VALIDATE_URL)) {
                $errPfp = "Votre url n'est pas conforme.";
            }
        }


        /* ENVOIE REQUETE */
        if (empty($errUserName) && empty($errMail) && empty($errPassword) && empty($errConfirmedPassword) && empty($errPfp)) {
            $connexion->query("INSERT INTO users (user_name, user_email, user_password, user_img) VALUES ('$username', '$mail', '$password', '$userPfp')");
            $aa = "test réussi";

            header("Location: ./inscriptionReussi.php");


        }
        
    } 
}


?>




<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>

    <form action="./inscription.php" method="post">

        <label for="name">Entrez votre nom&nbsp;:</label>
        <div> <?php echo $errUserName ?> </div>
        <input type="text" name="user_name" value="<?php if (isset($username)) {
                                                        echo $username;
                                                    } ?>" id="name">
        <br>


        <label for="email">Entrez votre adresse mail&nbsp;:</label>
        <div> <?php echo $errMail ?></div>
        <input type="email" name="user_email" value="<?php if (isset($mail)) {
                                                            echo $mail;
                                                        } ?>" id="email">
        <br>

        <label for="password">Entrez votre mot de passe&nbsp;:</label>
        <div> <?php echo $errPassword ?> </div>
        <input type="password" name="user_password" id="password">
        <br>

        <label for="cconfirmedPassword">Vérifiez votre mot de passe&nbsp;:</label>
        <div> <?php echo $errConfirmedPassword ?> </div>
        <input type="password" name="user_confirmedPassword" id="confirmedPassword">
        <br>


        <label for="pfp">Entrez l'url de votre image de profil&nbsp;:</label>
        <div>
            <p>Ce champ n'est pas obligatoire et peut etre rempli plus tard</p>
        </div>
        <input type="url" name="user_img" value="" id="pfp">

        <br>
        <input type="submit" name="inscription" value="S'inscrire">


<br>
        <p> <?php echo $aa ?> </p>

    </form>


</body>

</html>