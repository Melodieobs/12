<?php 
    session_start();

    if($_SESSION && $_SESSION['connected'] === TRUE){
    
        $uName = $_SESSION['userPseudo'];
        ?>
        <h1>Bienvenue <?= $uName ;?></h1>
        <p>Pour vous déconnecter <a href="./logout.php" title="deconnection">c'est ici</a></p>

<?php
    }
    else{ ?>
        <h1>Vous n'avez pas les droits suffidants</h1>
        <?php
    }


?>