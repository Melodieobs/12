<?php

    require_once("./connBase.php");

    if($_POST){
        $pseudo = $_POST["pseudo"];
        $pwd = $_POST["pwd"];

        $req = $connexion->query("SELECT id FROM users WHERE pseudo LIKE '$pseudo' AND passwor LIKE '$pwd' ");
        $assocResult = $req->fetchAll(PDO::FETCH_ASSOC);

            if($assocResult){
                echo "<h2>Connection reussi</h2>";
                session_start();
                $_SESSION["connected"] = TRUE;
                $_SESSION["userPseudo"] = $pseudo;
                var_dump($_SESSION);

            }
            else{
                echo "<h2>connection echouée : L'utilisateur n'existe pas ou le mot de passe saisie et érronée</h2>";
            }

    // var_dump($assocResult);
}
?>
