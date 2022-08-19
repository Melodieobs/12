<?php 

    require_once("./connBase.php");
?>


<?php 

    if($_POST){
        // traiter le formulaire

        // verification de le confirmation du mot de passe
        if($_POST["pwd"] === $_POST["confirmer"]){
            
            $pseudo = $_POST["pseudo"] ;
            $email= $_POST["email"] ;
            $pass = $_POST["pwd"] ;

            $req = $connexion->query("INSERT INTO users (pseudo, email, passwor) VALUES ('$pseudo', '$email', '$pass')");

            var_dump($req);

        }
        else{
            echo "votre mot de passe comporte une erreur.";
        }

    }
    else{
?>
<h2>
<?php 

        echo "accès cette page non autorisé";
        
    }
?>
</h2>